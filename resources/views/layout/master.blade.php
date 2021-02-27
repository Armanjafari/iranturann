<!DOCTYPE html>
<html>
<head>
@include('layout.header')
</head>
<body dir="rtl">

        <!--start navbar menu-->
        @include('layout.navbar')
  <!--start main-->
  @include('alerts.errors') <!-- TODO Fix this problem (alerts under navbar) !-->
  @include('alerts.success')
    @yield('content')
</body>
@include('layout.footer')
</html>