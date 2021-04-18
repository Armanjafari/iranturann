<?php

namespace App\Http\Controllers\Product;

use App\Full;
use App\Http\Controllers\Controller;
use App\Product;
use App\Support\Basket\Basket;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductController extends Controller
{
    public function index()
    
    {
        // $sessionstorage = resolve(SessionInterface::class);
        // $sessionstorage->set('product',10);
        // $sessionstorage->set('item',11);
        // $sessionstorage->set('kala',12);
        // $sessionstorage->set('mahsol',13);
        // $sessionstorage->unset('mahsol');
        // //$sessionstorage->clear();
        // dd($sessionstorage->count());
        //dump(resolve(Basket::class)->itemCount());
        $products = Product::all();
        return view('Product.products', compact('products'));
    }
    public function product(Full $option)
    {
        $option->load('product');
        $option->product;
        $product = $option->product;
        $product->load('pure','options');
        $product->pure->load('attributes');
        $pure = $product->pure;
        dd($pure->attributes[1]->pivot->values);
        $diffrent_colors = $product->options->load('colors');
        // dd($product->options->first()->colors);
        return view('Product', compact('product', 'diffrent_colors' , 'option' , 'pure'));
    }
}