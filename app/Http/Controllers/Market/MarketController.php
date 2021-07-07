<?php

namespace App\Http\Controllers\Market;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function __construct()
    {
        $this->middleware(['is.market' , 'auth'])->only(['financalForm']);
    }
    public function index(Request $request, Market $seller)
    {
        $seller->products->load('fulls');
        $products = $seller->products;
        return view('market' , compact('seller' , 'products'));
    }
    public function financalForm()
    {
        $user = auth()->user();
        $products = $user->market->products->load('fulls.orders.payment');
        // dd($user->market->orders);
        $full_price = 0;
        $sef_product = null;
        $arr = [];
        $ord = array();
        foreach ($products as $product) {
            // dd($product->market->categories->first()->pivot->percent);
            $user->market->categories->first()->pivot->percent;
            foreach ($product->fulls as $full) {
                // $product->pure
                foreach ($full->orders as $order) {
                    //  dd($order->pivot->market->categories->first()->pivot);
                    if ($order->payment->status >= 1)
                    {
                        array_push($ord, $order);
                        $order->pivot->wherePivot('market_id' , $user->market->id);
                        $full_price += $order->pivot->price;
                    }
                }
                
            }
        }
        foreach ($products as $product) {
            foreach ($product->market->categories as $category ) {
                $product->market->categories->first()->pivot->percent;
            }
        }
        $paid = 0;
        foreach ($user->market->financials as $financial) {
            $paid += $financial->price;
        }
        return view('Market.financial' , compact('user' , 'products' , 'full_price' , 'paid' , 'ord'));
    }
}
