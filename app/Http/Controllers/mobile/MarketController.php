<?php

namespace App\Http\Controllers\mobile;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index(Request $request, Market $seller)
    {
        $products = collect($seller->fulls);
        $sort = $request->input('sort');
        $products = $this->filtering($sort , $seller , $products);
        // dd($products);
        // dd($request->all());
        // $seller->orderBy('asc');
        $products = $products->unique('product_id');
        $products = $products->paginate(12);
        // dd($products);
        // dd($products->where('is_active',1)->unique('product_id'));
        // dd( $seller->products);
        // foreach ($products as $product) {
        //     $product->fulls()->where('is_active',1)->get();
        // }
        return view('mobile.market' , compact('seller' ,'sort', 'products'));
    }
    private function filtering($sort, Market $seller ,$products)
    {
        switch ($sort) {
            case 'viewed':
                return $seller->viewed($products);
                break;
            case 'desc':
                return $seller->desc($products);
                break;
            case 'asc':
                return $seller->asc($products);
                break;
            default:
                return $seller->createdFilter($products);
                break;
        }
    }
}
