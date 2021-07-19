<?php

namespace App\Http\Controllers\User;

use App\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function showProfile()
    {
        $user = auth()->user();
        return view('user.profile',compact('user'));
    }
    public function editForm()
    {
        $cities = City::all();
        $user = auth()->user();
        return view('user.profile_edit',compact('cities','user'));
    }
    public function edit(Request $request)
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

        return redirect()->route('show.profile')->withSuccess(' ویرایش با موفقیت انجام شد ');
    }
}
