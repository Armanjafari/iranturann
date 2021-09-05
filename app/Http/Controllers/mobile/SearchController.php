<?php

namespace App\Http\Controllers\mobile;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SearchController extends Controller
{
    public function search(Market $market , Request $request)
    {
        // TODO refactor this moudle
        $query = $request->input('query');
        $pures = [];
        foreach ($market->products as $product) {
            $product = $product->pure()->where('persian_title' ,'LIKE','%' . $query . '%')
            ->orWhere('persian_title' ,'LIKE','%' .$query)
            ->orWhere('persian_title' ,'LIKE',$query.'%' )
            ->orWhere('title' ,'LIKE','%' . $query . '%')
            ->orWhere('title' ,'LIKE',$query . '%')
            ->orWhere('title' ,'LIKE','%' . $query)->get();
            array_push($pures ,$product);
        }

        Arr::flatten($pures);
        $products = [];
        foreach ($pures as $key) {
            foreach ($key as $product) {
                foreach ($product->products as $product) {
                    if ($product->market_id == $market->id) {
                    foreach ($product->fulls as $full) {
                        array_push($products , $full);
                    }
                    }
                }
            }
        }
        $products = collect($products);
        $products = $products->unique('product_id');
        dd($products);

    }
}
