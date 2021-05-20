<?php

namespace App\Http\Controllers\Admin;

use App\Center;
use App\City;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Http\Request;

class ShopingCenterController extends Controller
{
    public function showForm()
    {
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $centers->load('image');
        return view('Admin.ShopingCenter.shopingcenter' , compact('cities' , 'centers'));
    }
    public function createShop(Request $request)
    {
        $this->validator($request);
        $center = Center::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'city_id' => $request->input('city'),
            'slug' => $request->input('slug'),
            'instagram' => $request->input('instagram'),
            'phone_number' => $request->input('phone_number'),       
        ]);
        $file = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $center->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
        return redirect()->back()->withSuccess(' با موفقیت انجام شد ');
    }
    public function validator(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'image' => 'required',
            'slug' => 'required',
        ]);
    }
    public function showEditForm(Center $shop)
    {
        $cities = City::all();
        $cities->load('province');
        $centers = Center::all();
        $centers->load('image');
        return view('Admin.ShopingCenter.edit' , compact('cities' , 'shop' ,'centers'));
    }
    public function edit(Center $shop , Request $request)
    {
        $this->validator($request);
        $file = $request->file('image');
        $shop->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'slug' => $request->input('slug'),
            'instagram' => $request->input('instagram'),
            'city_id' => $request->input('city'),
            'phone_number' => $request->input('phone_number'),
            ]);
        $shop->image->delete();
        $file = $request->file('image');
        $destination = '/images/' . now()->year . '/' . now()->month . '/' . now()->day . '/';
        $file->move(public_path($destination) , $file->getClientOriginalName());
        $shop->image()->create([
            'address' => $destination . $file->getClientOriginalName()
        ]);
        return redirect()->route('show.form.shop')->withSuccess(' با موفقیت انجام شد ');
    }
    public function delete(Center $shop)
    {
        try{
            $shop->delete();
            return back()->withSuccess(__('iranturan.success message'));
        }catch (\Exception $e){
            return back()->withError(__('iranturan.error delete center'));
        }
    }
}
