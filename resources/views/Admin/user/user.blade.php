@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
  <div class="card-header add-product-box text-center">
    <span class="add-product"> ثبت کاربران </span>
  </div>
  @include('alerts.errors')
  @include('alerts.success')
  <form action="{{ route('user.create.admin') }}" method="post">
    @csrf
    <div class="card mt-3">
      <div class="card-body text-right">
        <div class="row">
          <div class="col-lg-6 mt-4-5">
            <div class="first-name">
              <label class="label">نام ونام خانوادگی </label>
              <input name="name" type="text" value="{{old('name')}}" class="form-control p-3 form-control-one"
                placeholder="نام و نام خانوادگی خود را وارد کنید">
            </div>
          </div>
          <div class="col-lg-6 mt-4-5">
            <div class="first-name">
              <label class="label">شماره موبایل</label>
              <input name="phone_number" value="{{old('phone_number')}}" type="text"
                class="form-control p-3 form-control-one" placeholder=" شماره موبایل را وارد کنید ">
            </div>
          </div>
          <!-- update record start -->
          <div class="col-lg-12 mt-5">
            <div class="text-center">
              <input type="submit" class="btn-Record" value="ثبت">
            </div>
          </div>
  </form>
  <!-- update record end-->
  <div class="col-lg-12 mb-3 mt-5">
    <div class="col-lg-12 mt-3">
      <table class="table table-bordered table-striped text-center form-control-two">
        <thead>
          <tr>
            <th>نام و نام خانوادگی</th>
            <th>شماره موبایل</th>
            <th> ورودی </th>
            <th>تاریخ ثبت نام</th>
            <th>سفارشات</th>
            <th>عملیات</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @forelse ($users as $user)
            <td> {{ $user->name }} </td>
            <td> {{$user->phone_number}} </td>
            <td>{{ $user->parent_id ?? 'وبسایت' }}</td>
            <td> {{ $user->created_at }} </td>
            <td> <a href=""> سفارشات </a> </td>
            <td> <a href="{{ route('show.user.edit.form.admin',$user->id) }}"> ویرایش </a></td>
          </tr>
          @empty

          @endforelse

        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection