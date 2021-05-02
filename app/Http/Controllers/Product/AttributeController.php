<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Attribute;
use App\Product;
use App\Pure;

class AttributeController extends Controller
{
    public function index(Pure $attribute)
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
        
        // dd($values);  TODO fix relation between attributes and attribute values , M 2 M => One To Many
        return response()->json([
            'Product' => $attribute->load('attributes.pivot.values'),]
        );
    }
}
