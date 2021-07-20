<?php

namespace App\Http\Controllers;

use App\Category;
use App\Center;
use App\Market;
use App\Product;
use App\Pure;
use App\User;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        // dd($user->hasRole('seller'));
        $markets = Market::where('type', 3)->get();
         //dd($users);
        $centers = Center::all();
        $messenger_seller = Market::wheretype(1)->get();
        // dd($seller);
        $categories = Category::all();
        return view('index',compact('messenger_seller', 'centers' , 'categories' , 'markets'));
    }
    public function failed()
    {
        return view('response.failed');
    }
    public function success()
    {
        return view('response.success');
    }
    public function search(Request $request)
    {
        // dd($request->all());
        $query = $request->input('query');
        if(!$query)
        return response()->json(['error' => 'ورودی وارد نشده ']);
        $products = Pure::where('persian_title' ,'LIKE','%' . $query . '%')
        ->orWhere('persian_title' ,'LIKE','%' .$query)
        ->orWhere('persian_title' ,'LIKE',$query.'%' )
        ->orWhere('title' ,'LIKE','%' . $query . '%')
        ->orWhere('title' ,'LIKE',$query . '%')
        ->orWhere('title' ,'LIKE','%' . $query)->get();
        $centers = Center::where('name' ,'LIKE','%' . $query . '%')
        ->orWhere('name' ,'LIKE',$query . '%')
        ->orWhere('name' ,'LIKE','%' . $query)->get();
        $markets = Market::where('market_name' ,'LIKE',$query . '%')
        ->orWhere('market_name' ,'LIKE',$query . '%')
        ->orWhere('market_name' ,'LIKE',$query . '%')->get();
        return view()
    }
}
