<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Option;
use App\Pure;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showForm()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $options = Option::all();
        return view('Admin.product.product' , compact('categories','brands','options'));
    }
    public function createProduct(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'persian_title' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'slug' => 'required',
            'brand_id' => 'required',
            'option_id' => 'required',

        ]);
        // Pure::create([]);
    }
}
