@extends('layout.master')
@section('content')
<main>
    <form action="{{ route('register.with.code') }}" method="POST">
      @csrf
    <div class="col-lg-6 m-auto col-sm-7 col-12">
    <div class="card  border-color-promiry">
        <div class="card-body text-right  col-md-12">
            <p class="login-register ml-auto mr-auto font-weight-bold">ثبت نام</p><br>
          <div id="first_name" class="mt-5 mr-lg-5">
              <label> نام و نام خانوادگی </label>
             <input type="text" name="name" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
          </div>
          <div id="first_name" class="mt-5 mr-lg-5">
            <label> استان </label>
           <input type="text" name="province" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
        </div>
        <div id="first_name" class="mt-5 mr-lg-5">
            <label> شهر </label>
           <input type="text" name="city" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
        </div>
        <div id="first_name" class="mt-5 mr-lg-5">
            <label> کد پستی </label>
           <input type="text" name="postal_code" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
        </div>
        <div id="first_name" class="mt-5 mr-lg-5">
            <label> آٔدرس </label>
           <input type="text" name="address" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
        </div>
<div class="text-center ml-lg-5">
  <input type="submit" class="button mt-5  pt-3 pb-3 btn-login sign-up" value="ورود به سیستم">
</div>
          </div>
   </div>
   </div>
   </form>
</main>
@endsection
