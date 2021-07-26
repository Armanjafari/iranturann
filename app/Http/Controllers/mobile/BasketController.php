<?php

namespace App\Http\Controllers\mobile;

use App\Exceptions\QuantityExceededException;
use App\Full;
use App\Http\Controllers\Controller;
use App\Market;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    private $basket;
    private $transaction;
    public function __construct(Basket $basket, Transaction $transaction)
    {
        $this->middleware('auth')->only(['checkoutForm' , 'checkout']);
        $this->basket = $basket;
        $this->transaction = $transaction;
        
    }
    public function index(Market $market)
    {
        $items = $this->basket->all();
        //dd($items);
        return view('mobile.Product.basket',compact('items','market'));
    }
    public function checkoutForm(Market $market)
    {
        return view('mobile.Product.checkout',compact('market'));
    }
    public function checkout(Request $request , Market $market)
    {
        $this->validateForm($request);
        $order = $this->transaction->checkout(); // TODO check this
        return redirect()->route('mobile.show.market',$market->id)->withSuccess('سفارش شما با شماره' . $order->id ?? '');
    }
    private function validateForm(Request $request)
    {
        $request->validate([
            'method' => ['required'],
            'gateway' => ['required_if:method,online']
        ]);
    }
}
