<?php

namespace App\Http\Controllers\mobile;

use App\Category;
use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(Market $market)
    {
        return view('mobile.category', compact('market'));
    }
    public function single(Market $market, Category $category)
    {
        // $category = $market->categories()->whereId($category->id)->get();
        $products = [];
        foreach ($category->products as $pure) {
            
            $product = $pure->products()->whereMarket_id($market->id)->first();
            if (is_null($product)) {
                continue;
            }
            
            foreach ($product->fulls as $full) {
                array_push($products,$full);
            }
            
        }
        $products = collect($products);
        $products = $products->unique('product_id');
        dd($products);
    }
}
