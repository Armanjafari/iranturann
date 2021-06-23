<?php

namespace App\Http\Controllers\ShopingCenter;

use App\Http\Controllers\Controller;
use App\Center;
use App\User;
class ShopingCenterController extends Controller
{
    // $role = Role::wherePersian_name('فروشنده')->with('users')->get();
    // dd($role->users); // TODO fix this 
    public function sellers(Center $center)
    {
        // $seller->centers;
        // $seller->load('users')
        $centerName = $center->name;
        $users = $center->users->load('images');
        //dd($users);
        return view('Shoping' , compact('users' , 'centerName' ,'center'));
        // $role->users()->
    }
}
