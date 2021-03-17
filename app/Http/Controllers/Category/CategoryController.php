<?php

namespace App\Http\Controllers\Category;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function byProduct(Category $category)
    {
        dd($category->products);
        $category->products;
        foreach ($category->products as $key => $value) {
            array_push($products , $value);
            # code...
        }
        // dd($category->products);
        return response()->json([
            'id' => $products,
            'title' => $category->products[1]->title,
            'desc' => $category->products[1]->description,
            'price' => $category->products[1]->price,
            'image' => $category->products[1]->image,
            'stock' => $category->products[1]->stock,


        ]);
    }
}