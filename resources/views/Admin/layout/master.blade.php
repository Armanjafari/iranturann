<!DOCTYPE html>
<html>

<head>
  @include('Admin.layout.header')
</head>
<body dir="rtl">
      <!-- Navbar -->
      <main>
    @include('Admin.layout.navbar')
    @yield('content')
      </main>

  </body>
  <!--start bootstrap juery and js file-->
  <script src="{{ asset('assets/admin/js/jquery-3.2.1.slim.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
  <!--end bootstrap juery and js file-->
  <!--start chart js-->
  <script src="{{ asset('assets/admin/js/chart.min.js') }}"></script>
  <!--end chart js-->
  <!--start jquery file-->
  <script src="{{ asset('assets/admin/js/jquery-3.5.1.min.js') }}"></script>
  <!--end jquery file-->
  <!--start js file-->
  <script src="{{ asset('assets/admin/js/my script.js') }}"></script>
  <!--end js file-->
  
  </html>