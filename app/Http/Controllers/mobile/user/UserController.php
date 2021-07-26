<?php

namespace App\Http\Controllers\mobile\user;

use App\City;
use App\Http\Controllers\Controller;
use App\Market;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function showProfile(Market $market)
    {
        $user = auth()->user();
        return view('mobile.user.profile',compact('user','market'));
    }
    public function editForm(Market $market)
    {
        $cities = City::all();
        $user = auth()->user();
        return view('mobile.user.profile_edit',compact('cities','user','market'));
    }
    public function edit(Request $request ,Market $market)
    {
        $user = auth()->user();
        $request->validate([
            'postal_code'=> 'required|max:12',
            'name'=> 'required',
            'address'=> 'required',
            'city'=> 'required|exists:cities,id',
        ]);
        $user->update([
            'name'=> $request->input('name'),

        ]);
        $user->shipings()->update([
            'address'=> $request->input('address'),

            'city_id'=> $request->input('city'),
            'postal_code' => $request->input('postal_code'),

        ]);

        return redirect()->route('mobile.show.profile',$market->id)->withSuccess(' ویرایش با موفقیت انجام شد ');
    }
}
