@extends('Admin.layout.master')
@section('content')
<div class="col-lg-12 mt-5 text-right">
    <div class="card">
     <div class="card-header bg-success text-light">
     </div>  
      <table class="table  table-responsive-sm table-striped ">
          <center>
          <form method="POST" action="{{route('roles.update', $role->id)}}" class="mx-25">
            @csrf
        <input type="text" name="name" class="w-25 form-control" value="{{$role->name}}" placeholder="نام رول را وارد کنید">
        <input type="text" name="persian_name" class="w-25 form-control" value="{{$role->persian_name}}" placeholder="نام فارسی رول را وارد کنید">
        <thead>
          <tr>
            <th scope="">ویرایش نقش</th>
            <th scope="">افزودن سطح دسترسی</th>


          </tr>
        </thead>
        <tbody>
          <td>
          @forelse ($permissions as $permission)
          <div>
              <center>
              <input type="checkbox" name="permissions[]" {{$role->permissions->contains($permission) ? 'checked' : ''}} value="{{$permission->name}}" id="{{'permission' . $permission->id}}">
              <label for="{{'permission' . $permission->id}}">{{$permission->persian_name}}</label></center> 
          </div>
        </center>
          @empty
          <p> دسترسی در دیتابیس وحود ندارد</p>
          @endforelse</td>
          <td>
            <input type="submit" class="form-control btn btn-danger btn-block "value="ویرایش کردن رول"></center>
          </td>
        </tbody>
      </form>
      </table>
    </div>
  </div>
@endsection