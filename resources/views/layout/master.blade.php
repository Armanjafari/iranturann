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
    @include('alerts.success')
</body>
@include('layout.footer')
</html>