<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--start font awesome-->
  <link rel="stylesheet" href="{{ asset('assets/market/css/fontawesome-free-5.15.1-web/css/all.min.css') }}">
  <link rel='stylesheet prefetch' href='{{ asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css') }}'>
  <!--end fontawesome-->
  <!--start bootstrap css-->
  <link rel="stylesheet" href="{{ asset('assets/market/css/bootstrap.min.css') }}">
  <!--end bootstrap css-->
  <!--start owl-carousel-->
  <link rel="stylesheet" href="{{ asset('assets/market/plogin/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/market/plogin/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}">
  <!--end owl-carousel-->
  <!--start style css-->
  <link rel="stylesheet" href="{{ asset('assets/market/css/style.css') }}">
  <!--end style css-->
</head>
<body dir="rtl">
  <main>
    @include('Market.layout.navbar')
    @include('alerts.errors')
    @include('alerts.success')
    @yield('content')
</main>
</body>
<!--start bootstrapio jquery and js file-->
<script src="{{ asset('assets/market/js/jquery-3.2.1.slim.min.js') }}"></script>
<script src="{{ asset('assets/market/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/market/js/bootstrap.min.js') }}"></script>
<!--end bootstrap jquery and js file-->
<!--start jquery file-->
<script src="{{ asset('assets/market/js/jquery-3.5.1.min.js') }}"></script>
<!--end jquery file-->
<!--start js file-->
<script src="{{ asset('assets/market/js/myscript.js') }}"></script>
<!--end js file-->
<!--start owl carousel js-->
<script src="{{ asset('assets/market/plogin/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
<!--end owl carousel js-->
<!--start kit fontawesome-->
<script src="{{ asset('assets/market/js/a076d05399.js') }}"></script>
<!--end kit fontawesome-->
</html>