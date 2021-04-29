<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use App\Center;
use App\City;
use App\Http\Controllers\Controller;
use App\Market;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MarketController extends Controller
{
    public function showForm()
    {
        $markets = Market::with('agent', 'user.shipings.city.province', 'center')->get();
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $agents = Agent::all();
        $agents->load('user');
        return view('Admin.market.market', compact('cities', 'centers', 'agents', 'markets'));
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
            'slug' => 'required',
            'password' => 'required'


        ]);
        $user = User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'password' => Hash::make($request->input('password')),
        ]);
        $user->shipings()->create([
            'address' => $request->input('address'),
            'work_address' => $request->input('work_address'),
            'work_phone' => $request->input('work_phone'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')
        ]); // TODO fix images
        $user->market()->create([
            'market_name' => $request->input('market_name'),
            'slug' => Str::slug($request->input('slug'), '-'),
            'bank_number' => $request->input('bank_number'),
            'shaba_number' => $request->input('shaba_number'),
            'agent_id' => $request->input('agent_id'),
            'center_id' => $request->input('center_id'),
            'instagram' => $request->input('instagram'),
            'type' => $request->input('type'),
        ]);
        return back()->withSuccess(' با موفیت انجام شد\ ');
    }
    public function showEditForm(Market $market)
    {
        $markets = Market::with('agent', 'user.shipings.city.province', 'center')->get();
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $agents = Agent::all();
        $agents->load('user');
        return view('Admin.market.edit', compact('cities', 'centers', 'agents', 'markets', 'market'));
    }
    public function edit(Market $market, Request $request)
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
            'slug' => 'required',
            'logo' => 'required'


        ]); // fix password
        if ($request->has('password')) {
            dd('inja');
            $market->user()->update([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number'),
                'password' => Hash::make($request->input('password')),
            ]);
        }
        else {
            $market->user()->update([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number'),
            ]);
        }
        $market->update([
            'market_name' => $request->input('market_name'),
            'slug' => Str::slug($request->input('slug'), '-'),
            'bank_number' => $request->input('bank_number'),
            'shaba_number' => $request->input('shaba_number'),
            'agent_id' => $request->input('agent_id'),
            'center_id' => $request->input('center_id'),
            'instagram' => $request->input('instagram'),
            'type' => $request->input('type'),
        ]);
        $market->user->shipings()->update([
            'address' => $request->input('address'),
            'work_address' => $request->input('work_address'),
            'work_phone' => $request->input('work_phone'),
            'postal_code' => $request->input('postal_code'),
            'city_id' => $request->input('city_id')
        ]);
        return redirect()->route('show.market.form')->withSuccess(' با موفقیت انجام شد ');
    }
}
