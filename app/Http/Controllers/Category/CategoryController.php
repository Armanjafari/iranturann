<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function byProduct(Category $category)
    {
        $products = [];
        for ($i=0; $i < sizeof($category->products); $i++) { 
                array_push($products , $category->products[$i]);
                # code...
            }
        // dd($products);
        
        // dd($category->products);
        return response()->json([
            'products' => $products
        ]);
    }
}