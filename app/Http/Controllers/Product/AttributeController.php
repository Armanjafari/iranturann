<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;

class AttributeController extends Controller
{
    public function index(Attribute $attribute)
    {
        dd($attribute->valeus);
        return response()->json();
    }
}
