<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Waranty;
use Illuminate\Http\Request;

class WarantyController extends Controller
{
    public function showForm()
    {
        $waranties = Waranty::all();
        return view('Admin.waranty.waranty' , compact('waranties'));
    }
    public function createWaranty(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:200',
        ]);
        Waranty::create([
            'name' => $request->input('name')
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function edit(Waranty $waranty ,Request $request)
    {
        $this->validator($request);
        $waranty->update([
            'name' => $request->input('name'),
            ]);
        return redirect()->route('show.waranty.form')->withSuccess(' با موفیت انجام شد ');
    }
    public function showEditForm(Waranty $waranty ,Request $request)
    {
        $waranties = Waranty::all();
        return view('Admin.waranty.edit', compact('waranties' , 'waranty'));
    }
    public function validator($request)
    {
        return $request->validate([
            'name' => 'required|string|min:4|max:60|unique:waranties',
        ]);
    }
}
