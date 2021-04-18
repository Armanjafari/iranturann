@extends('Admin.layout.master')
@section('content')
<form method="post" action="{{route('users.update', $user->id) }}">
    @csrf
@forelse ($roles as $role)
<div>
    <center>
    <input type="checkbox" name="roles[]" {{$user->roles->contains($role) ? 'checked' : ''}} value="{{$role->name}}" id="{{'role' . $role->id}}">
    <label for="{{'role' . $role->id}}">{{$role->persian_name}}</label></center> 
</div>
@empty
<p> نقشی وحود ندارد</p>
@endforelse
<br> <br>
@forelse ($permissions as $permission)
<div>
    <center>
    <input type="checkbox" name="permissions[]" {{$user->permissions->contains($permission) ? 'checked' : ''}} value="{{$permission->name}}" id="{{'permission' . $permission->id}}">
    <label for="{{'permission' . $permission->id}}">{{$permission->persian_name}}</label></center> 
</div>
@empty
<p> دسترسی در دیتابیس وحود ندارد</p>
@endforelse
<center>
<input type="submit" value="تایید">
</center>
</form>
@endsection