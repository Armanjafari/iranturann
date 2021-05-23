<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class MarketManagementController extends Controller
{
    public function showForm()
    {   
        // dd('inja');
        $markets = Market::with('user.shipings')->get();
        return view('Admin.market.index' , compact('markets'));
    }
    public function productsForm(Market $market)
    {
        $market->load('products.pure');
        return view('Admin.market.product_list' , compact('market'));
    }
    public function marketStatus(Market $market, Request $request)
    {
        dd($request->all());
        $market->update([

        ]);
    }
}
