
<html>
  <head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<!--start font awesome-->
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome-free-5.15.1-web/css/all.min.css') }}">
<link rel='stylesheet prefetch' href='{{ asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css') }}'>
<!--end fontawesome-->
<!--start bootstrap css-->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!--end bootstrap css-->
<!--start owl-carousel-->
<link rel="stylesheet" href="{{ asset('assets/plogin/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plogin/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
<!--end owl-carousel-->
<!--start style css-->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!--end style css-->
  </head>
  <body dir="rtl">
  <main>
<div class="col-lg-9 m-auto col-sm-7 col-12">
  @include('alerts.errors')
  @include('alerts.success')
<form action="{{ route('admin.login') }}" method="POST">
@csrf
<div class="card  border-color-promiry">
    <div class="card-body text-right  col-md-12">
        <p class="login-register ml-auto mr-auto font-weight-bold bg-light w-100 p-3">ورود</p><br>
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
</form>
</div>
</main>
  </body>
</html>
