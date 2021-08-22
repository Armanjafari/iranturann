<?php

namespace App\Http\Controllers\ApiControllers;

use App\Exceptions\QuantityExceededException;
use App\Http\Controllers\Controller;
use App\Product;
use App\Pure;
use App\Support\Basket\Basket;
use App\Support\Payment\Transaction;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $basket;
    private $transaction;
    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return response()->json([
            'data' => $product,
            'code' => 200
        ]);
    }
    public function __construct(Basket $basket, Transaction $transaction)
    {
        $this->middleware('auth:api')->except('allproducts');
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
            return response()->json(['success' =>"محصول به سبد خرید اضافه شد"]);
        } catch (QuantityExceededException $e) {
            return response()->json(['error' =>" اتمام موجودی "]);
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
    public function allproducts()
    {
        $products = Pure::all();
        $products->load('images','products.fulls.waranty','category' , 'brand');
        return response()->json(['products' => $products, 'code' => 200]);
    }

}
