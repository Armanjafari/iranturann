<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;
use App\Product;

class AttributeController extends Controller
{
    public function index(Product $attribute)
    {
        // dd($attribute);
        // return $attribute->attributes;
        $product = Product::find(1)->id;
        // return $attribute->values->first()->pivot->product_id;
        // dd($attribute->values->pivot->product_id);
        // $values = [];
        // foreach ($attribute->attributes as $key) {
        //     array_push($values , $key->pivot->values);
        // }
        
        // dd($values);
        return response()->json([
            'Product' => $attribute->load('attributes.pivot.values'),]
        );
    }
}
