<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function byProduct(Category $category)
    {        
        // $products = $category->products()->first->fulls;
        // dd($products);
        $products = [];
        foreach ($category->products as $product) {
            
                array_push($products , $product->fulls);
                # code...
            }
            // TODO refactor this
        $products = collect($products)->collapse();
        $products = $products->where('is_actove',1);
        $products = $products->unique('product_id');
        // dd($products);
        $products = $products->paginate(12);
        
        // dd($category->products); 
        return view('category.categoryByProducts', compact('products'));
    }
}