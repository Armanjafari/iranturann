@extends('Admin.layout.master')
@section('content')
<div class="col-lg-12 mt-5 text-right">
    <div class="card">
     <div class="card-header bg-success text-light">
       ویرایش نقش
     </div>  
      <table class="table  table-responsive-sm table-striped ">
        <thead>
          <tr>
            <th scope="col">نام ونام خانوادگی</th>
            <th scope="col">شماره موبایل</th>
            <th scope="col">سطح دسترسی</th>
            <th scope="col">نقش</th>
            <th scope="col">عملیات</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @forelse ($users as $user)
            <td>{{$user->name}}</td>
            <td>{{$user->phone_number}}</td>
            <td>@foreach ($user->roles as $role)
                {{$role->name}} ,
            @endforeach
            </td>
            <td>
              @foreach ($user->permissions as $permission)
                  {{$permission->persian_name}}
              @endforeach
            </td>
            <td><a class="fas fa-edit" href="{{route('users.edit', $user->id)}}"></a><i class="fa fa-trash mr-2" aria-hidden="true" id="trash"></i></td>
          </tr>
          @empty
              <p>یوزری وجود ندارد</p>
            @endforelse

        </tbody>
      </table>
    </div>
  </div>
  @endsection