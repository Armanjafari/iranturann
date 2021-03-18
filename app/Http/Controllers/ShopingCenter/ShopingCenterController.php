<?php

namespace App\Http\Controllers\ShopingCenter;

use App\Http\Controllers\Controller;
use App\Center;
use App\User;
class ShopingCenterController extends Controller
{
    public function sellers(Center $seller)
    {
        // $seller->centers;
        // $seller->load('users')
        $centerName = $seller->name;
        $users = $seller->users;
        //dd($users);
        return view('Shoping' , compact('users' , 'centerName'));
        // $role->users()->
    }
}
