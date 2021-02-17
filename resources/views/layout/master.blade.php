<!DOCTYPE html>
<html>
<head>
@include('layout.header')
</head>
<body dir="rtl">
        <!--start navbar menu-->
        @include('layout.navbar')
  <!--start main-->
    @yield('content')
    @include('alerts.errors')
</body>
 <!--start bootstrapio jquery and js file-->
 <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!--end bootstrap jquery and js file-->
<!--start jquery file-->
<script src="js/jquery-3.5.1.min.js"></script>
<!--end jquery file-->
<!--start js file-->
<script src="js/myscript.js"></script>
<!--end js file-->
<!--start owl carousel js-->
<script src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<!--end owl carousel js-->
<!--start kit fontawesome-->
<script src="js/a076d05399.js"></script>
<!--end kit fontawesome-->
</html>