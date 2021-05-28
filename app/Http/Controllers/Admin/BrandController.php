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
        return view('Admin.brand.brand', compact('brands'));
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
        $file->move(public_path($destination), $file->getClientOriginalName());
        $brand->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
        return redirect()->back()->withSuccess(__('iranturan.success message'));
    }
    public function edit(Brand $brand, Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:60',
            'persian_name' => 'required|min:2',
        ]);
        $file = $request->file('image');
        $brand->update([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name')
        ]);
        if ($request->has('image')) {

            $brand->image->delete();

            $this->addImage($request, $brand);
        }
        return redirect()->route('show.brand.form')->withSuccess(__('iranturan.success message'));
    }
    public function showEditForm(Brand $brand, Request $request)
    {
        $brands = Brand::all();
        $brands->load('image');
        return view('Admin.brand.edit', compact('brands', 'brand'));
    }
    public function validator($request)
    {
        return $request->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|min:2|max:60',
            'persian_name' => 'required|min:2',
        ]);
    }
    public function addImage(Request $request, Brand $brand)
    {
        $file = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination), $file->getClientOriginalName());
        $brand->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
    }
    public function delete(Brand $brand)
    {
        try{
            $brand->delete();
            return back()->withSuccess(__('iranturan.success delete brand'));
        }catch (\Exception $e){
            return back()->withError(__('iranturan.error delete brand'));
        }
    }
}
