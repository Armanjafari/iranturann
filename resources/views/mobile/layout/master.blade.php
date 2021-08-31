<!DOCTYPE html>
<html>
<head>
@include('mobile.layout.header')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="G5Jn8M-O5gunSKHFNh0z9EJIzDeWB3MH4ent21mF-xI" />
<meta property="og:description" content="فروشگاه اینترنتی ایران توران مرجع خرید کالای اصل و اورجینال جنس هایی که در ایران توران مشاهده میکیند همگی مستقیم از دبی وارد میشوند انواع موبایل , لوازم خانگی و لباس" /> 
<meta name="description" content="فروشگاه اینترنتی ایران توران مرجع خرید کالای اصل و اورجینال جنس هایی که در ایران توران مشاهده میکیند همگی مستقیم از دبی وارد میشوند انواع موبایل , لوازم خانگی و لباس" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:type" content="website" />
<meta name="keywords" content="فروشگاه اینترنتی, خرید آنلاین، موبایل, تبلت, لپ تاپ, تلویزیون, کامپیوتر, صنایع دستی, لوازم خانگی, فروش اینترنتی، ایران توران، ایران توران"/> 
<meta property="og:site_name" content="ایران توران" />
<meta property="og:title" content="فروشگاه اینترتی ایران توران" />
<meta property="og:url" content="https://www.iranturan.com/" />
<link rel="canonical" href="https://www.iranturan.com/" />
<meta name="robots" content="noindex, nofollow">

</head>

<body dir="rtl">

         @include('alerts-index.errors') <!-- TODO Fix this problem (alerts under navbar) !-->
         @include('alerts-index.success')
    @yield('content')
        <!--end main-->
    @include('mobile.layout.navbar')

    
</body>
<!--start bootstrap juery and js file-->
<script src="{{ asset('assets/mobile/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/mobile/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/mobile/js/bootstrap.min.js') }}"></script>
<!--end bootstrap juery and js file-->
<!--start jquery file-->
<script src="{{ asset('assets/mobile/js/jquery-3.5.1.min.js') }}"></script>
<!--end jquery file-->
<!--start js file-->
<script src="{{ asset('assets/mobile/js/myscript.js') }}"></script>
<!--end js file-->
</html>