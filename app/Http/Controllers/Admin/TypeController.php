<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function showForm()
    {
        $values = Color::all();
        $options = Option::all();
        return view('Admin.type.type' , compact('values' , 'options'));
    }
    public function edit(Option $option ,Request $request)
    {
        // TODO check this
        // $this->validator($request);
        $option->update([
            'name' => $request->input('name'),
            ]);
        return redirect()->route('show.type.form')->withSuccess(' با موفیت انجام شد ');
    }
    public function showEditForm(Option $option ,Request $request)
    {
        $options = Option::all();
        return view('Admin.type.edit', compact('options' , 'option'));
    }
    public function validator($request)
    {
        return $request->validate([
            'name' => 'required|string|max:60|unique:options',
        ]);
    }
    public function createOption(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:options'
        ]);
        $option = Option::create([
            'name' => $request->input('name')
        ]);
        return back()->withSuccess('عملیات با موفیت انجام شد');
    }
    public function showDashboardForm()
    {
        return view('Admin.dashboard');
    }
}
