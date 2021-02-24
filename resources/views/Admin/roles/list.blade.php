@extends('Admin.layout.master')
@section('content')
<div class="col-lg-12 mt-5 text-right">
    <div class="card">
     <div class="card-header bg-success text-light">
     </div>  
      <table class="table  table-responsive-sm table-striped ">
          <center>
          <form method="POST" action="{{route('roles.store')}}" class="mx-25">
            @csrf
        <input type="text" name="name" class="w-25 form-control" placeholder="نام رول را وارد کنید">
        <input type="text" name="persian_name" class="w-25 form-control" placeholder="نام فارسی رول را وارد کنید">
        <input type="submit" class="form-control btn btn-info w-25  "value="اضافه کردن رول"></center>
        </form>
        <thead>
          <tr>
            <th scope="">نام نقش</th>
            <th scope="">نام فارسی نقش</th>
            <th>ویرایش نقش</th>

          </tr>
        </thead>
        <tbody>
          <tr>
             @forelse ($roles as $role)
                 <td>{{$role->name}}</td>
                 <td>{{$role->persian_name}}</td>
                 <td><a class="fas fa-edit" href="{{route('roles.edit', $role->id)}}"></a><i class="fa fa-trash mr-2" aria-hidden="true" id="trash"></i></td>
            </tr>
             @empty
                 
             @endforelse
        </tbody>
      </table>
      {{ $roles->links() }}
    </div>
  </div>
@endsection