<!DOCTYPE html>
<html>
<head>
@include('layout.header')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="vVEZ20H2CIWnaEKelO0DYcS3lwXMJ-VLvNPV5dqAM8A" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:type" content="website" />
<meta name="robots" content="index, follow"/>
<link rel="canonical" href="https://iranturan.com/" />
<meta property="og:url" content="https://iranturan.com/" />
@yield('head')
</head>

<body dir="rtl">
    <!--start navbar menu-->
            @include('layout.navbar')
         <!--start main-->
         @include('alerts.errors') <!-- TODO Fix this problem (alerts under navbar) !-->
         @include('alerts.success')
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