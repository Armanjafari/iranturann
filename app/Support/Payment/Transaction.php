<?php
namespace App\Support\Payment;

use App\Events\OrderRegistered;
use App\Order;
use App\Payment;
use App\Support\Basket\Basket;
use App\Support\Cost\Contracts\CostInterface;
use App\Support\Payment\Gateways\GatewayInterface;
use App\Support\Payment\Gateways\Mellat;
use App\Support\Payment\Gateways\Saman;
use App\Support\Payment\Gateways\Pasargad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
    function checkout()
    {
        DB::beginTransaction();
        try {
            $order = $this->makeOrder();
            $payment = $this->makePayment($order);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return null;
        }
        if ($payment->isOnline())
        {
        return $this->gatewayFactory()->pay($order , $this->cost->getTotalCosts());
        }
        $this->normalizeQuantity($order);
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
         $a = resolve($list[$this->request->gateway]);
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
        # TODO basket is not dynamic !
        $result = $this->gatewayFactory()->verify($this->request);
        if ($result['status'] == GatewayInterface::TRANSACTION_FAILED) return false;
        $this->confirmPayment($result);
        $this->normalizeQuantity($result['order']);
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
            'code' => bin2hex(Str::random(16)),
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
            'amount' => $this->cost->getTotalCosts()
            ]);
    }
    private function products()
    {
        foreach ($this->basket->all() as $product) {
            $product->load('product');
            // dd($product->product->market_id);
            $products[$product->id] = [
                'quantity' => $product->quantity,
                'market_id' => $product->product->market_id,
            ];
        }
        return $products;
    }
}
