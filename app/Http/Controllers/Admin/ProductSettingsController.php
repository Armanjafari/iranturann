<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class ProductSettingsController extends Controller
{
    public function showForm()
    {
        $categories = Category::all();
        return view('Admin.settings' , compact('categories'));
    }
    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:categories,name',
            'persian_name' => 'required|string',
            'parent_id'=> 'integer'
        ]);
        $category = Category::create([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name'),
            'parent_id' => $request->input('parent'),
        ]);
        return back()->withSuccess('عملیات با موفیت انجام شد');
    }
    public function createOption(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:options,name'
        ]);
        $category = Option::create([
            'name' => $request->input('name')
        ]);
        return back()->withSuccess('عملیات با موفیت انجام شد');
    }
}
