<?php

namespace App\Http\Controllers;

use App\Pre;
use Illuminate\Http\Request;

class PreController extends Controller
{
    public function index()
    {
        return view('pre.pre_registration');
    }
    public function create(Request $request)
    {
        $request->validate([
            'senf' => 'required',
            'city' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ]);
        Pre::create([
            'senf' => $request->input('senf'),
            'city' => $request->input('city'),
            'mobile' => $request->input('mobile'),
            'address' => $request->input('address'),
        ]);
        return redirect()->route('index')->withSuccess('درخواست شما با موفقیت ثبت گردید');
    }
}
