<?php
namespace App\Support\Payment;

use App\Order;
use App\Support\Basket\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Transaction
{
    private $request;
    private $basket;
    public function __construct(Request $request , Basket $basket)
    {
        $this->request = $request;
        $this->basket = $basket;
    }
    function checkout()
    {
        $order = $this->makeOrder();
        dd($order);
    }
    private function makeOrder()
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'code' => bin2hex(Str::random(16)),
            'amount' => $this->basket->subTotal()
            ]);
        return $order;
    }
}
