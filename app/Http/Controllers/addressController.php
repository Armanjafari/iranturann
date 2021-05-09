<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function index(Request $request)
    {
        $city = City::where('province_id' , $request->input('province'))->get();
        $province = Province::all();
        return response()->json([
            'cities' => $city,
            'provinces' =>   $province  ]);
    }
}
