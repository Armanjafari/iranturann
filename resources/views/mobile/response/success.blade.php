@extends('mobile.layout.master')
@section('content')
<main>
    <br> <br> 
    
    <div class="col-lg-12"> 
        <div class="col-lg-4 mr-auto ml-auto">
<div class="payment-success text-center p-3">
   <img src="assets/img/svg element/check.svg" class="check" alt=""> 
   <p class="mt-3">پرداخت با موفقیت</p><br>
   <div class="mb-3">
   <a href="{{route('index')}}" class="btn-Record">بازگشت به سایت</a>
  </div>
</div>
</div>
</div>
</main>
@endsection