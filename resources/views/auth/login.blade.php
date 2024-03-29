@extends('layout.master')
@section('content')
    
<main>
    <form action="{{ route('login') }}" method="POST">
      @csrf
    <div class="col-lg-6 m-auto col-sm-7 col-12">
    <div class="card  border-color-promiry">
        <div class="card-body text-right  col-md-12">
            <p class="login-register ml-auto mr-auto font-weight-bold">ورود</p><br>
          <div id="first_name" class="mt-5 mr-lg-5">
              <label>شماره موبایل</label>
             <input type="text" name="phone_number" class="form-control input-lg w-75 form-control-2" placeholder="شماره موبایل خود را وارد نمایید">
          </div>
     <div id="first_name" class="mt-5 mr-lg-5">
      <label>رمز</label>
     <input type="password" name="password" class="form-control input-lg w-75 form-control-3" placeholder="رمز عبور خود را وارد نمایید">
     </div>
<div class="text-center ml-lg-5">
  <input type="submit" class="button mt-5  pt-3 pb-3 btn-login sign-up" value="ورود به سیستم">
</div>
          </div>
   </div>
   </div>
   </form>
</main>
@include('alerts.errors')
@endsection
