<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\Center;
use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function showForm()
    {
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $agents = Agent::all();
        return view('Admin.market.market', compact('cities', 'centers', 'agents'));
    }
    public function createMarket(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'market_name' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'work_address' => 'required',
            'work_phone' => 'required',
            'phone_number' => 'required',
            'bank_number' => 'required',
            'shaba_number' => 'required',
            'agent_id' => 'required',
            'center_id' => 'required',
            

        ]);
    }
}
