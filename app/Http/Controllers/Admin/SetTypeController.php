<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Http\Controllers\Controller;
use App\Option;
use Illuminate\Http\Request;

class SetTypeController extends Controller
{
    public function showForm()
    {
        $values = Color::all();
        $options = Option::all();
        return view('Admin.type.type' , compact('values' , 'options'));
    }
    public function createSetType(Request $request)
    {
        $this->validator($request);
        Color::create([
            'title' => $request->input('title'),
            'value' => $request->input('value'),
            'option_id' => $request->input('option_id')
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function edit(Color $value ,Request $request)
    {
        // $this->validator($request);
        $value->update([
            'title' => $request->input('title'),
            'value' => $request->input('value'),
            'option_id' => $request->input('option_id'),
            ]);
        return redirect()->route('show.type.form')->withSuccess(' با موفیت انجام شد ');
    }
    public function showEditForm(Color $value ,Request $request)
    {
        $values = Color::all();
        $options = Option::all();
        return view('Admin.type.setTypeEdit', compact('values' , 'value' ,'options'));
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
    public function validator(Request $request)
    {
        return $request->validate([
            'title' => 'required|min:1|max:200|unique:colors',
            'value' => 'required|min:1|max:200|unique:colors',
            'option_id' => 'required'
        ]);
    }
}
