<?php

namespace App\Http\Controllers\Market;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'brand_persian_title' => 'required|unique:brands,persian_name',
            'brand_title' => 'required',
        ]);
        Brand::create([
            'name' => $request->input('brand_title'),
            'persian_name' => $request->input('brand_persian_title'),
        ]);
        return back()->withSuccess('برند شما ایجاد شد لطفا از لیست برند مورد نظر را ایجاد کنید');
    }
}
