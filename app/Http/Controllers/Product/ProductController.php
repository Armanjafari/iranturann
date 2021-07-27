<?php

namespace App\Http\Controllers\Product;

use App\Full;
use App\Http\Controllers\Controller;
use App\Market;
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
    public function product(Full $option)
    {
        if (!$option->is_active)
            return abort(404);
        $option->load('product.pure');
        // dd($option);
        $product = $option->product;
        $market = Market::find($product->market_id);
        // $products = $option->products;
        // $products->load('pure','options');
        // $products->pure->load('attributes');
        // $pure = $products->pure;
        // $diffrent_colors = $products->options->load('colors');
        $related = Product::all()->load('pure','fulls');
        $related = Pure::where('category_id' , $product->pure->category_id)->paginate(10);
        // dd($product->options->first()->colors); 'product', 'diffrent_colors' , 'option' , 'pure' , 'related'
        return view('Product', compact('option','related' , 'product' , 'market'));
    }
}