<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showForm()
    {
        $categories = Category::whereParent_id(0)->get();
        $categories->load('child');
        // dd($categories);
        return view('Admin.category.category', compact('categories'));
    }
    public function createCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories',
            'persian_name' => 'required|unique:categories',
            'parent_id' => 'required'
        ]);
        Category::create([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name'),
            'parent_id' => $request->input('parent_id'),
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
}
