@extends('mobile.layout.master')
@section('content')

    <div class="container-fluid mb-5">
        <div class="row mb-5"> 
            <!-- start login -->
                 <div class="login-text text-center">
                 <form action="{{ route('mobile.login_with_code',$market->id) }}" method="POST">
                     @csrf
                <p class="font12">برای ورود یا ثبت نام شماره موبایل خود را وارد نمایید</p>
               <input type="tel" name="phone_number" placeholder="شماره موبایل خود راوارد کنید" class="border-0 input-style">
            <input type="submit" class="mt-3 loginsystem" value="ورود به سیستم">
               </form>
               <a href="" class="font14  mt-3 Rules-link">ثبت نام</a> 
           </div>
            <!-- end login -->
           </div>
           </div>

@endsection

