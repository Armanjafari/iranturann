@extends('Market.layout.master')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">آمار و ارقام <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">تماس با ما</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">امتیاز شما</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">تعداد خرید های من</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">راهنمایی و پشتیبانی</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">تنظیمات</a>
          </li>
      </ul>
    
    </div>
  </nav>
  <div class="text-center">
  <a href="" class="btn btn-success mt-5">توقف کل فروش محصولات</a>
  </div>
@endsection