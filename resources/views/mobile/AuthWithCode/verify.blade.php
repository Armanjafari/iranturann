@extends('mobile.layout.master')
@section('content')

<div class="container-fluid mb-5">
  <div class="row mb-5">
    <div class="login-text text-center">
      <form action="{{ route('mobile.validate_code',$market->id) }}" method="POST">
        @csrf
        <p class="font12">کد تایید خود را وارد نمایید</p>
        <p class="font12 submit-thone-text">کد تایید برای شما ارسال گردید</p>
        <input type="text" name="code" placeholder="کد تایید" class="border-0 input-style">
        <input type="submit" class="mt-3 virtification" value="تایید">
      </form>
      <div class="mt-3 font12"> <span id="time">02:00</span><span class="mr-1">تا اتمام اعتبار کد</span></div>
    </div>
  </div>
</div>
<script>
  function startTimer(duration, display) {
                var timer = duration, minutes, seconds;
                setInterval(function () {
                    minutes = parseInt(timer / 60, 10);
                    seconds = parseInt(timer % 60, 10);
            
                    minutes = minutes < 10 ? "0" + minutes : minutes;
                    seconds = seconds < 10 ? "0" + seconds : seconds;
            
                    display.textContent = minutes + ":" + seconds;
            
                    if (--timer < 0) {
                        timer = duration;
                    }
                }, 1000);
            }
            
            window.onload = function () {
                var fiveMinutes = 60 * 2,
                    display = document.querySelector('#time');
                startTimer(fiveMinutes, display);
            };
            
</script>
@endsection