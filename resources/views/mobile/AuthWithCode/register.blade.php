@extends('mobile.layout.master')
@section('content')
<div class="container-fluid mb-5">
  <div class="row mb-5">
    <!-- start register -->
    <div class="register-box text-center p-3 mt-3">
      <p>ثبت نام</p>
      <form action="{{ route('mobile.register.with.code',$market->id) }}" method="POST">
        @csrf
        <input type="text" name="parent" value="{{$market->user->id}}" style="display: none" id="">

        <input type="text" name="name" placeholder="نام و نام خانوادگی خود را وارد نمایید" class="border-0 input-style">
        <select name="city" id="" class="float-right mr-5 mt-3  option-style">
          <option value="">استان</option>
          <option value="">فارس</option>
        </select>
        <select name="city" id="" class="float-right mr-5 mt-3  option-style">
          <option value="">شهر</option>
          @forelse ($cities as $city)
          <option value="{{$city->id}}"> {{$city->name}} </option>
          @empty

          @endforelse
        </select>
        <input type="text" name="postal_code" placeholder="کد پستی خود را وارد نمایید"
          class="mt-3 border-0 input-style">
        <input type="text" name="address" placeholder="آدرس خود را وارد نمایید" class="mt-3 border-0 input-style">
        <input type="submit" class="mt-5 login-system" value="ثبت نام">
      </form>
      <p class="mt-5 font14"> ثبت نام در سایت به منزله اطلاع و تایید شرایط و قوانین است</p>
      <a href="https://iranturan.com/rules" class="font12 Rules-link">لینک قوانین</a>
    </div>
    <!-- end register -->
  </div>
</div>
@endsection