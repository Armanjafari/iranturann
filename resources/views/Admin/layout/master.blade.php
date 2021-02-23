<!DOCTYPE html>
<html>
<head>
  @include('Admin.layout.header')
</head>
<body dir="rtl">
     <!--start nav-->
     @include('Admin.layout.navbar')
    <!--end navbar menu-->
      <!--start table-->
      @yield('content')
      <!--end table-->
      @include('alerts.success')
      @include('alerts.errors')
</body>
 <!--start bootstrap juery and js file-->
 <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <!--end bootstrap juery and js file-->
<!--start chart js-->
<script src="{{ asset('js/chart.min.js') }}"></script>
<!--end chart js-->
<!--start jquery file-->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<!--end jquery file-->
<script src="{{ asset('js/myscript.js') }}"></script>
<script>
$(document).ready(function(){
  $('#fas').click(function(){
$('#sidebar').css('margin-right','0px')
$('#fas').css('visibility','hidden')
$('#times').css('visibility','visible')
$(".content").css('margin-right','300px')
$(".navbar-item").css('margin-right','300px')
})
$('#times').click(function(){
$('#sidebar').css('margin-right','-300px')
$('#fas').css('visibility','visible')
$('#times').css('visibility','hidden')
$(".content").css('margin-right','0px')
$(".navbar-item").css('margin-right','0px')
})
})
</script>
</html>