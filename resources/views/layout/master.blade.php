<!DOCTYPE html>
<html>
<head>
@include('layout.header')
<meta name="google-site-verification" content="G5Jn8M-O5gunSKHFNh0z9EJIzDeWB3MH4ent21mF-xI" />
<meta name="description" content="فروشگاه اینترنتی ایران توران مرجع خرید کالای اصل و اورجینال جنس هایی که در ایران توران مشاهده میکیند همگی مستقیم از دبی وارد میشوند انواع موبایل , لوازم خانگی و لباس" />

</head>

<body dir="rtl">
    <!--start navbar menu-->
            @include('layout.navbar')
         <!--start main-->
         @include('alerts-index.errors') <!-- TODO Fix this problem (alerts under navbar) !-->
         @include('alerts-index.success')
    @yield('content')
        <!--end main-->
    @include('layout.footer')
        <!-- start footer -->
    
</body>
<script src="{{ asset('assets/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--end bootstrap jquery and js file-->
<!--start jquery file-->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<!--end jquery file-->
<!--start js file-->
<script src="{{ asset('assets/js/myscript.js') }}"></script>
<!--end js file-->
<script src="{{ asset('assets/js/myscript2.js') }}"></script>
<!--start owl carousel js-->
<script src="{{ asset('assets/plogin/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<!--end owl carousel js-->
<!--start kit fontawesome-->
<script src="{{ asset('assets/js/a076d05399.js') }}"></script>
<script src="{{asset('assets/js/index.js')}}"> </script>
<!--end kit fontawesome-->
</html>