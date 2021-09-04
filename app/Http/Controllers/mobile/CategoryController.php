<?php

namespace App\Http\Controllers\mobile;

use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(Market $market)
    {
        return view('mobile.category', compact('market'));
    }
}
