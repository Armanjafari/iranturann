<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::paginate(8);
        //dd($roles);
        return view('Admin.roles.list', compact('roles'));
    }
    public function store(Request $request)
    {
        $this->validateForm($request);
        Role::create($request->only('name' , 'persian_name'));
        return back()->with('success' , true);
    }
    protected function validateForm(Request $request)
    {
        return $request->validate([
            'name' => 'required|max:50',
            'persian_name' => 'required|max:50'
        ]);
    }
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $role->load('permissions');
        return view('Admin.roles.edit' , compact('permissions' , 'role'));
        
    }
    public function update(Request $request , Role $role)
    {
        //TODO this is for test
        $this->validateForm($request);
        $role->update($request->only('name','persian_name'));
        $role->refreshPermissions($request->permissions);
        return back()->with('success', true);
    }
}
