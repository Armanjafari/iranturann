<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showForm()
    {
        $users = User::all();
        return view('Admin.user.user' , compact('users'));
    }
    public function editForm(User $user)
    {
        $users = User::all();
       return view('Admin.user.edit' , compact('users' ,'user'));
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required|unique:users,phone_number|min:10|max:14',
        ]);
        User::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
        ]);
        return back()->withSuccess(__('iranturan.success message'));
    }
    public function edit(User $user, Request $request)
    {
        $user->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
        ]);
        return redirect()->route('show.user.form.admin')->withSuccess(__('iranturan.success message'));
    }
}
