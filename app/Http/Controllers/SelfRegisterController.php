<?php

namespace App\Http\Controllers;

use App\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class SelfRegisterController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:60',
         'phone_number' => 'required|string|unique:users',
         'passowrd' => 'required|string|min:6,max:100'
         ]);
        User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'password' => bcrypt($request->input('name')),
        ]);
        return "done";
    }
    public function registerView()
    {
        return view('signup');
    }
}
