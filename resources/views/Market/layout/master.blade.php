<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--start font awesome-->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-free-5.15.1-web/css/all.min.css') }}">
  <link rel='stylesheet prefetch' href="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css') }}">
  <!--end fontawesome-->
  <!--start bootstrap css-->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!--end bootstrap css-->
  <!--start owl-carousel-->
  <link rel="stylesheet" href="{{asset('assets/plogin/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plogin/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
  <!--end owl-carousel-->
  <!-- start css style select2 -->
  <link rel="stylesheet" href="assets/css/select2.min.css">
  <!-- end css style select2 -->
  <!--start style css-->
  <link rel="stylesheet" href="assets/css/style.css">
  <!--end style css-->
</head>
<body dir="rtl">
    @include('alerts.errors')
    @include('alerts.success')
    @yield('content')
    @include('Market.layout.navbar')
</body>
<!--start bootstrapio jquery and js file-->
<script src="assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--end bootstrap jquery and js file-->
<!--start jquery file-->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<!--end jquery file-->

<!--start owl carousel js-->
<script src="assets/plogin/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<!--end owl carousel js-->
<!--start kit fontawesome-->
<script src="assets/js/a076d05399.js"></script>
<!--end kit fontawesome-->
<!-- start select2 -->
<script src="assets/js/select2.min.js"></script>
<!-- end select2 -->
<!--start js file-->
<script src="assets/js/myscript.js"></script>
<!--end js file-->
</html>