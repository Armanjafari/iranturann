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
        $pures = Pure::orderBy('id', 'desc')->paginate(20);
        $categories = Category::all();
        $brands = Brand::all();
        $options = Option::all();
        return view('Admin.product.product', compact('categories', 'brands', 'options' , 'pures'));
    }
    public function createProduct(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'persian_title' => 'required',
            'category_id' => 'required',
            'price' => 'integer',
            'slug' => 'required',
            'brand_id' => 'required',
            'option_id' => 'required',
            'description' => 'required',
            'weight' => 'required',
            'keywords' => 'required',

        ]);
        $pure = Pure::create([
            'title' => $request->input('title'),
            'persian_title' => $request->input('persian_title'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'slug' => $request->input('slug'),
            'brand_id' => $request->input('brand_id'),
            'option_id' => $request->input('option_id'),
            'description' => $request->input('description'),
            'status' => $request->input('is_active'),
            'weight' => $request->input('weight'),
            'keywords' => $request->input('keywords'),

        ]);
        if ($request->has('images')) {
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
            $pure->images()->create([
                'address' => $destination . $image->getClientOriginalName() . $i
            ]);
            $i++;
        }
    }
    public function deleteImage(Pure $pure)
    {
        foreach ($pure->images as $image) {
            $image->delete();
        }
    }
    public function editForm(Pure $pure)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $options = Option::all();
        return view('Admin.product.edit' , compact('pure','categories','brands','options'));
    }
    public function edit(Pure $pure , Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'persian_title' => 'required',
            'category_id' => 'required',
            'price' => 'integer',
            'slug' => 'required',
            'brand_id' => 'required',
            'option_id' => 'required',
            'description' => 'required',
            'weight' => 'required',
            'keywords' => 'required',

        ]);
        $pure->update([
            'title' => $request->input('title'),
            'persian_title' => $request->input('persian_title'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price'),
            'slug' => $request->input('slug'),
            'brand_id' => $request->input('brand_id'),
            'option_id' => $request->input('option_id'),
            'description' => $request->input('description'),
            'status' => $request->input('is_active'),
            'weight' => $request->input('weight'),
            'keywords' => $request->input('keywords'),

        ]);
        if ($request->has('images')) {
            $this->deleteImage($pure);
            $this->image($request, $pure);
        }
        return redirect()->route('show.form.product')->withSuccess('با موفقیت انجام شد');
    }
}
