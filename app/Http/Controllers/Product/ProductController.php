<?php

namespace App\Http\Controllers\Product;

use App\Full;
use App\Http\Controllers\Controller;
use App\Product;
use App\Pure;
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
        $products->load('pure' , 'fulls');
        return view('Product.products', compact('products'));
    }
    public function product(Pure $option)
    {
        $option->load('products.fulls.colors');
        // dd($option);
        // $products = $option->products;
        // $products->load('pure','options');
        // $products->pure->load('attributes');
        // $pure = $products->pure;
        // $diffrent_colors = $products->options->load('colors');
        $related = Product::all()->load('pure','fulls');
        // dd($product->options->first()->colors); 'product', 'diffrent_colors' , 'option' , 'pure' , 'related'
        return view('Product', compact('option','related'));
    }
}