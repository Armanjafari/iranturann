<?php

namespace App\Http\Controllers;

use App\Category;
use App\Center;
use App\Market;
use App\Product;
use App\User;

class homecontroller extends Controller
{
    public function index()
    {
        // dd($user->hasRole('seller'));
        $markets = Market::where('type', 0)->get();
         //dd($users);
        $centers = Center::all();
        $messenger_seller = Market::wheretype(1)->get();
        // dd($seller);
        $categories = Category::all();
        return view('index',compact('messenger_seller', 'centers' , 'categories' , 'markets'));
    }
}
