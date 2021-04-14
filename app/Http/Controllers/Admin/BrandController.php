<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function showForm()
    {
        $brands = Brand::all();
        $brands->load('image');
        return view('Admin.brand.brand' , compact('brands'));
    }
    public function createBrand(Request $request)
    {
        $this->validator($request);
        $brand = Brand::create([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name')
        ]);
        $file = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $brand->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
        return redirect()->back()->withSuccess('با موفقیت انجام شد');
    }
    public function edit(Brand $brand ,Request $request)
    {
        $this->validator($request);
        $file = $request->file('image');
        $brand->update([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name')
            ]);
        $brand->image->delete();
        $file = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $brand->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function showEditForm(Brand $brand ,Request $request)
    {
        $brands = Brand::all();
        $brands->load('image');
        return view('Admin.brand.edit', compact('brands' , 'brand'));
    }
    public function validator($request)
    {
        return $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|min:2|max:60|unique:brands',
            'persian_name' => 'required|min:4|unique:brands',
        ]);
    }
}
