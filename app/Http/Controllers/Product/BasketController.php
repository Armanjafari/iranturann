<?php

namespace App\Http\Controllers\Product;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;
use App\Product;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use App\Support\Storage\Contracts\StorageInterface;
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
    public function index()
    {
        $items = $this->basket->all();
        //dd($items);
        return view('Product.basket',compact('items'));
    }
    public function add(Product $product)
    {
        try {
            $this->basket->add($product , 1);
            return back()->with('success', "محصول به سبد خرید اضافه شد");
        } catch (QuantityExceededException $e) {
            return back()->with('error', 'محصول موجود نمیباشد');
        }
    }

    public function clear()
    {
        resolve(StorageInterface::class)->clear();
    }
    public function update(Request $request , Product $product)
    {
        $this->basket->update($product,$request->quantity);
        return back();
    }
    public function checkoutForm()
    {
        return view('Product.checkout');
    }
    public function checkout(Request $request)
    {
        $this->validateForm($request);
        $order = $this->transaction->checkout();
        return redirect('products')->with( 'payment', 'سفارش شما با شماره' .$order->id);
    }
    private function validateForm(Request $request)
    {
        $request->validate([
            'method' => ['required'],
            'gateway' => ['required_if:method,online']
        ]);
    }

}
