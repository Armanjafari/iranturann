<?php

namespace App\Http\Controllers\mobile;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Market $market)
    {
        
        foreach ($market->products as $product) {
            return $product->pure()->where('persian_title' ,'LIKE','%' . 'samsung' . '%')
            ->orWhere('persian_title' ,'LIKE','%' .'samsung')
            ->orWhere('persian_title' ,'LIKE','samsung'.'%' )
            ->orWhere('title' ,'LIKE','%' . 'samsung' . '%')
            ->orWhere('title' ,'LIKE','samsung' . '%')
            ->orWhere('title' ,'LIKE','%' . 'samsung')->get();
        }

    }
}
