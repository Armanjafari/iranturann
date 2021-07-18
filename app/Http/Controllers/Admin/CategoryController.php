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
        $this->validator($request);
        Category::create([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name'),
            'parent_id' => $request->input('parent_id') ?? '0',
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function showEditForm(Category $cat, Request $request)
    {
        $categories = Category::whereParent_id(0)->get();
        $categories->load('child');
        return view('Admin.category.edit' , compact('categories' , 'cat'));
    }
    public function edit(Category $cat ,Request $request)
    {
        $this->validator($request);
        $cat->update([
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian_name'),
            'parent_id' => $request->input('parent_id') ?? '0',
        ]);
        return redirect()->route('show.form.category')->withSuccess(' با موفقیت انجام شد ');
    }
    public function validator(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'persian_name' => 'required',
            'parent_id' => 'integer' 
        ]);
    }
}
