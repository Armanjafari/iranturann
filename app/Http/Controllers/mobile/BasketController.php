<?php

namespace App\Http\Controllers\mobile;

use App\Exceptions\QuantityExceededException;
use App\Full;
use App\Http\Controllers\Controller;
use App\Market;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class BasketController extends Controller
{
    private $basket;
    private $transaction;
    public function __construct(Basket $basket, Transaction $transaction)
    {
        // dd($market);
        // $this->middleware("auth")->only(['checkoutForm' , 'checkout']);
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
        if (!Auth::check())
        {
            return redirect()->route('mobile.login',$market->id);
        }
            return view('mobile.Product.checkout',compact('market'));
    }
    public function checkout(Request $request , Market $market)
    {
        if (!Auth::check())
        {
            return redirect()->route('mobile.login',$market->id);
        }        $this->validateForm($request);
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
    private function loginCheck($market)
    {
        if (!Auth::check())
        {
            return redirect()->route('mobile.login',$market->id);
        }
    }
}
