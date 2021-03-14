<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function index(Request $request , $province)
    {
        $city = City::where('name' , $province)->first();
        return response()->json([
            'id' => $city->id,
            'city' => $city->name,
            'province' => $city->province->name
            ]);
    }
}
