@extends('layout.master')
@section('content')
<main>
<div class="col-lg-12 mt-3"> 
    <div class="col-lg-4 mr-auto ml-auto">
<div class="payment-success text-center p-3">
<img src="assets/img/svg element/multiply.svg" class="check" alt=""> 
<p class="mt-3">پرداخت ناموفق</p><br>
<div class="mb-3">
<a href="{{route('index')}}" class="btn-Record">بازگشت به سایت</a>
</div>
</div>
</div>
<div class="col-lg-4">
   <a href="https://iranturan://back" class="back-app">بازگشت به برنامه</a>   
</div>
</div>
</main>
@endsection