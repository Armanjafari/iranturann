<?php
namespace App\Support\Payment;

use App\Order;
use App\Payment;
use App\Support\Basket\Basket;
use App\Support\Cost\Contracts\CostInterface;
use App\Support\Payment\Gateways\Mellat;
use App\Support\Payment\Gateways\Saman;
use App\Support\Payment\Gateways\Pasargad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Transaction
{
    private $request;
    private $basket;
    private $cost;
    public function __construct(Request $request , Basket $basket, CostInterface $cost)
    {
        $this->request = $request;
        $this->basket = $basket;
        $this->cost = $cost;
    }
    public function checkout()
    {
        
        // dd($this->request->all());
        DB::beginTransaction();
        try {
            $order = $this->makeOrder();
            $payment = $this->makePayment($order);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
			dd($e->getMessage());
            return null;
        }
        if ($payment->isOnline())
        {
        return $this->gatewayFactory()->pay($order , $this->cost->getTotalCosts());
        } // chech this normalize
        $this->normalizeQuantity($order);
        $this->normalizeWallet($order);
        //event(new OrderRegistered($order));
        $this->basket->clear();
        return $order;
    }
    private function gatewayFactory()
    {
        $list = [
            'saman' => Saman::class,
            'mellat' => Mellat::class,
            'pasargad' => Pasargad::class
         ];
         //dd($list[$this->request->gateway]);
         return resolve($list[$this->request->gateway]);
         
        // $gateway = [
        //     'saman' => Saman::class,
        //     'pasargad' => Pasargad::class,
        //     'mellat' => Mellat::class

        // ][$this->request->gateway];
        // return resolve($gateway);
    }
    public function verify()
    {
        // TODO basket is not dynamic !
        $result = $this->gatewayFactory()->verify($this->request);
        if ($result['status'] != 0) return false;
        $this->confirmPayment($result);
        $this->normalizeQuantity($result['order']);
        $this->normalizeWallet($result['order']);
        $this->basket->clear();
        return true;
    }
    
    private function normalizeQuantity($order)
    {
        foreach ($order->products as $product) {
            $product->decrementStock($product->pivot->quantity);
        }
    }
    private function confirmPayment($result)
    {
        return $result['order']->payment->confirm($result['refNum'] , $result['gateway']);
    }
    private function makeOrder()
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'code' => time(),
            'amount' => $this->basket->subTotal()
            ]);
            // dd($this->products());
        $order->products()->attach($this->products());
        return $order;
    }
    private function makePayment($order)
    {

        return Payment::create([
            'order_id' => $order->id,
            'method' => $this->request->method,
            'amount' => $this->cost->getTotalCosts(),
            'status' => 100
            ]);
    }
    private function products()
    {
        foreach ($this->basket->all() as $product) {
            $product->load('product');
            // dd($product->product->market_id);
            $cat_id = $product->product->pure->category_id;
            $percent = $product->product->market->categories()->wherePivot('category_id',$cat_id)->first()->pivot->percent;

            $products[$product->id] = [
                'quantity' => $product->quantity,
                'market_id' => $product->product->market_id,
                'price' => $product->price,
                'status' => 0,
                'category_id' => $percent,
            ];
        }
        return $products;
    }
    private function normalizeWallet($order)
    {
        // TODO refactor needed
        foreach ($order->products as $product) {
            $profit =($product->pivot->percent / 100) * ($product->pivot->price * $product->pivot->quantity);
            $final = ($product->pivot->price * $product->pivot->quantity)  - $profit;
            $product->product->market->increaseWallet($final);
            $product->product->market->increaseProfit($profit);
        }
    }

}