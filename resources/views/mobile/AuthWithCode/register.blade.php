@extends('mobile.layout.master')
@section('content')
<main>
  <form action="{{ route('mobile.register.with.code',$market->id) }}" method="POST">
    @csrf
    <div class="col-lg-6 m-auto col-sm-7 col-12">
      <div class="card  border-color-promiry">
        <div class="card-body text-right  col-md-12">
          <p class="login-register ml-auto mr-auto font-weight-bold">ثبت نام</p><br>
          <div id="first_name" class="mt-5 mr-lg-5">
            <label> نام و نام خانوادگی </label>
            <input type="text" name="name" class="form-control input-lg w-75"
              placeholder="نام ونام خانوادگی خود را وارد نمایید">
          </div>
          <input type="text" name="parent" value="{{$market->user->id}}" style="display: none" id="">
          <div id="" class="mt-5 mr-lg-5">
            <label> استان </label>
            <select name="province" class="" id="">
              <option value=""> </option>
            </select>
            <label> شهر </label>
            <select name="city" id="">
              @forelse ($cities as $city)
              <option value="{{$city->id}}"> {{$city->name}} </option>
              @empty
                
              @endforelse
            </select>
          </div>
          <div id="first_name" class="mt-5 mr-lg-5">
            <label> کد پستی </label>
            <input type="text" name="postal_code" class="form-control input-lg w-75"
              placeholder="کد پستی خود را وارد کنید">
          </div>
          <div id="first_name" class="mt-5 mr-lg-5">
            <label> آدرس </label>
            <textarea type="text" name="address" class="form-control w-75" placeholder="ادرس خود را وارد کنید"> </textarea>
          </div>
          <div class="text-center ml-lg-5">
            <input type="submit" class="button mt-5  pt-3 pb-3 btn-login sign-up" value="ورود به سیستم">
          </div>
          <div class="text-right p-3">
            <span>ثبت نام در سایت به منزله اطلاع و تایید شرایط و قوانین است</span>
            <a href="https://iranturan.com/rules" class="mr-3 text-success">لینک قوانین</a>
           </div>
        </div>
      </div>
    </div>
  </form>
</main>
@endsection