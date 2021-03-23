<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;
use App\Product;

class AttributeController extends Controller
{
    public function index(Attribute $attribute)
    {
        // dd($attribute);
        $product = Product::find(1)->id;
        dd($product->attributes);
        // return $attribute->values->first()->pivot->product_id;
        dd($attribute->values->pivot->product_id);
        return response()->json();
    }
}
