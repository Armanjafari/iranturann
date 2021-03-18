<?php

namespace App\Http\Controllers;

use App\Category;
use App\Center;
use App\User;

class homecontroller extends Controller
{
    public function index()
    {
        // dd($user->hasRole('seller'));
        $seller = User::all();
         //dd($users);
        $centers = Center::all();
        // dd($seller);
        $categories = Category::all();
        return view('index',compact('seller' , 'centers' , 'categories'));
    }
}
