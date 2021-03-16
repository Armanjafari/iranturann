<?php

namespace App\Http\Controllers;

use App\Role;
use App\ShopingCenter;
use App\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        // dd($user->hasRole('seller'));
        $seller = User::all();
         //dd($users);
        $centers = ShopingCenter::all();
        // dd($seller);
        return view('index',compact('seller' , 'centers'));
    }
}
