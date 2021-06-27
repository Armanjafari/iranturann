<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(Request $request, Market $seller)
    {
        $seller->products->load('fulls');
        $products = $seller->products;
        return view('market' , compact('seller' , 'products'));
    }
}
