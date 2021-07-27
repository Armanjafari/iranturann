<?php

namespace App\Http\Controllers\mobile;

use App\Full;
use App\Http\Controllers\Controller;
use App\Market;
use App\Product;
use App\Pure;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Market $market,Full $option)
    {
        if (!$option->is_active)
            return abort(404);
        $option->load('product.pure');
        // dd($option);
        $product = $option->product;
        // $market = Market::find($product->market_id);
        // $products = $option->products;
        // $products->load('pure','options');
        // $products->pure->load('attributes');
        // $pure = $products->pure;
        // $diffrent_colors = $products->options->load('colors');
        $related = Product::all()->load('pure','fulls');
        $related = Pure::where('category_id' , $product->pure->category_id)->paginate(10);
        // dd($product->options->first()->colors); 'product', 'diffrent_colors' , 'option' , 'pure' , 'related'
        return view('mobile.Product', compact('option','related' , 'product' , 'market'));
    }
}
