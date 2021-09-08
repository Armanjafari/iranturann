<footer class="mt-5">
  <div class="container-fluid col-lg-12 footer-box">
    <div class="row">
      <div class="col-lg-2 text-center col-sm-6 col-6">
        <img src="{{ asset('assets/img/svg element/iconfinder_box_1540166.svg') }}" alt="">
        <p>تحویل کالا</p>
      </div>
      <div class="col-lg-2  text-center col-sm-6 col-6">
        <img src="{{ asset('assets/img/svg element/iconfinder__53ui_2303158.svg') }}" alt="">
        <p>پشتیبانی 24ساعته</p>
      </div>
      <div class="col-lg-2  text-center col-sm-6 col-6">
        <img src="{{ asset('assets/img/svg element/iconfinder_07.Wallet_290143.svg') }}" alt="" class="wallet">
        <p>پرداخت در محل</p>
      </div>
      <div class="col-lg-2  text-center col-sm-6 col-6">
        <img src="{{ asset('assets/img/svg element/iconfinder_Artboard_24_3741738.svg') }}" alt="" class="Artboard">
        <p>ضمانت اصالت کالا</p>
      </div>
      <div class="col-lg-4 mt-4 text-center">
        <caption>درصورتی که نیاز به مشاوره دارید با ما تماس حاصل نمایید</caption>
        <p class="mt-2">{{$market->user->phone_number}}</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-2 text-center col-sm-6 col-6">
        <p>راهنمای خرید</p>
        <p>ثبت سفارش</p>
        <p>شیوه پرداخت</p>
      </div>
      <div class="col-lg-2 text-center col-sm-6 col-6">
        <p>خدمات به مشتریان</p>
        <p>پاسخ به پرسش های متداول</p>
        <p>حریم خصوصی</p>
      </div>
      <div class="col-lg-2 text-center col-sm-6 col-6 mt-lg-0 mt-3">
        <p>تماس باما</p>
        <p>درباره ما</p>
      </div>
    </div>
    <div class="row">
    
      <div class="col-lg-5 mr-auto mt-lg-0 mt-3 col-sm-12 col-12 ml-sm-3">
        <a href="https://trustseal.enamad.ir/?id=153838&code=7SuhHcVpcGxSaUSzRNTr">
          <img src="{{ asset('assets/img/svg element/namad.svg') }}" alt="" class="namad">
        </a>
      </div>
    </div>
  </div>
</footer>
<!--end footer-->