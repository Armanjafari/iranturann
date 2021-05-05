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
        return view('Admin.product.product', compact('categories', 'brands', 'options'));
    }
    public function createProduct(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'persian_title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'slug' => 'required',
            'brand_id' => 'required',
            'option_id' => 'required',
            'description' => 'required',

        ]);
        $pure = Pure::create([
            'title' => $request->input('title'),
            'persian_title' => $request->input('persian_title'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'slug' => $request->input('slug'),
            'brand_id' => $request->input('brand_id'),
            'option_id' => $request->input('option_id'),
            'description' => $request->input('description')
        ]);
        if ($request->has('image')) {
            $this->image($request, $pure);
        }
        return redirect()->back()->withSuccess('با موفقیت انجام شد');
    }
    public function image(Request $request, Pure $pure)
    {
        $i = 1;
        foreach ($request->file('images') as $image) {
            $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
            $image->move(public_path($destination), $image->getClientOriginalName() . $i);
            $pure->image()->create([
                'address' => $destination . $image->getClientOriginalName()
            ]);
            $i++;
        }
    }
}
