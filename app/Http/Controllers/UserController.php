<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with('roles','permissions')->get();
        return view('Admin.list',compact('users'));
    }
    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $user->load('roles', 'permissions');
        return view('Admin.edit',compact('roles', 'permissions' , 'user'));
    }
    public function update(Request $request , User $user)
    {
        $user->refreshPermissions($request->permissions);
        $user->refreshRoles($request->permissions);
        return back()->with('success', true);
    }
}
