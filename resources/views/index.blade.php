@extends('layout.master')
@section('head')
<title> فروشگاه اینترنتی ایران توران </title>
<meta property="og:description" content="فروشگاه اینترنتی ایران توران مرجع خرید کالای اصل و اورجینال . جنس هایی که در ایران توران مشاهده میکیند همگی مستقیم از دبی وارد میشوند . خرید موبایل , قیمت لباسشویی و پوشاک" /> 
<meta name="description" content="فروشگاه اینترنتی ایران توران مرجع خرید کالای اصل و اورجینال . جنس هایی که در ایران توران مشاهده میکیند همگی مستقیم از دبی وارد میشوند . خرید موبایل , قیمت لباسشویی و پوشاک" />
<meta property="og:locale" content="fa_IR" />
<meta property="og:type" content="website" />
<meta name="keywords" content="فروشگاه اینترنتی, خرید آنلاین، موبایل, تبلت, لپ تاپ, تلویزیون, کامپیوتر, صنایع دستی, قیمت لباسشویی, فروش اینترنتی، ایران توران، ایران توران"/> 
<meta property="og:site_name" content="ایران توران" />
<meta property="og:title" content="فروشگاه اینترتی ایران توران" />
<meta property="og:url" content="https://iranturan.com/" />
<link rel="canonical" href="https://iranturan.com/" />
@endsection
@section('content')
<!--start header2-->

<!-- end navbar !-->
<main>
    <div class="row">
        <div class="m-auto">
    <div id = "popup" class = "hidden">
    <button type="button" class="close" aria-label="Close">
  <span aria-hidden="true" class="close1 mt-3">&times;</span>
</button>
<p>سلام خودمونی خشش؟</p>
<div class="text-right">
<span>فقط فروشندگان</span>
<span class="text-box-popup">لار و گراش و خور و لطیفی و اوز</span>
<span>شما می توانید پس از ثبت نام در کمتر از 2روز اپلیکیشن فروشگاه آنلاین اختصاصی خودتان را داشته باشید</span>

<p class="mt-3">40% تخفیف</p>
<div class="mt-3 text-center">
<a href="{{ route('pre.registration.form') }}" class="btn btn-success">ثبت نام</a>
<p class="mt-3">تماس با ما : 09333551414</p>
</div>
</div>
</div>
</div>
    <div class="col-lg-8 col-lg-12w">
    <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile25">
    <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.38.43 (1).jpeg" alt="بازار" class="img-size4"></a></div>
    <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.38.43.jpeg" alt="بازار" class="img-size4"></a></div>
    <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.38.45 (1).jpeg" alt="بازار" class="img-size4"></a></div>
    <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.38.45.jpeg" alt="بازار" class="img-size4"></a></div>
</div>
    </div>
    <div class="col-lg-4 col-lg-12w">
    <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile26">
   <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.09.jpeg" alt="بازار" class="img-size5"></a></div>
   <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.13.jpeg" alt="بازار" class="img-size5"></a></div>
   <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.11.jpeg" alt="بازار" class="img-size5"></a></div>
   <div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.12.jpeg" alt="بازار" class="img-size5"></a></div>
</div> 
<div class="owl-carousel owl-theme mt-3 text-center" id="owl-mobile27">
<div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.10.jpeg" alt="بازار" class="img-size5"></a></div>
<div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.14.jpeg" alt="بازار" class="img-size5"></a></div>
<div class="item"><a href=""><img src="assets/img/WhatsApp Image 2021-07-07 at 17.57.16.jpeg" alt="بازار" class="img-size5"></a></div>
</div>
    </div>
           <!-- <div class="text-right">
           <span class="discount">تخفیف بالای 20درصد</span>
           </div>  -->
           <!-- <div class="owl-carousel owl-theme mt-2" id=owl-mobile12>
                     <div class="product-card m-3">
                     <a>
                     <span class="badge badge-danger badge-1">25%</span>
                      <span class="float-right Ready-to-send"> آماده ارسال<img src="assets/img/svg element/آماده ارسال جدید.svg" alt="" style="width:15px; display:inline-block" class="ml-1"></span>                      
            <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" style=""  alt="" class="img-product-size">
                  <caption>
                  <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                  </caption>
    <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span> </div>
           <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
           <span class="font-weight-bold">125,000تومان</span>
        </div>          
</a>
                 </div>
        </div>   -->
 
        <a class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <img src="assets/img/svg element/مراکز خرید.svg" alt="مراکز خرید">
         مراکز خرید
        </div>
        </a>
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile13">
        @forelse ($centers as $center)
            <div class="item">
               <div><a href="{{ route('sellers.by.centers',$center->id) }}"> <img src="{{$center->image->address}}" alt="{{$center->name}}" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
               <div class="text-center  mt-2 mr-lg-5">
               <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
               </div>
              <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{ route('sellers.by.centers',$center->id) }}"> {{$center->name}} </a>
              </div>
              <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="دانلود" style="width:15px; display:inline-block" class=""> </a>
              </div>
            </div>     
        @empty
            <p> مرکز خریدی وجود ندارد </p>
        @endforelse
    </div>

<a class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <img src="assets/img/svg element/فروشنده.svg" alt="فروشندگان">
         فروشندگان
        </div>
        </a> 
        {{-- <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile14">
          <div class="item"><a href="" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div> --}}
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile15>
        @forelse ($markets as  $market)
        <div class="item">
            <div><a href="{{route('show.market', $market->id)}}"> <img src="{{$market->images()->whereType('logo')->first()->address}}" alt="{{$market->market_name}}" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
            <div class="text-center mr-lg-5 mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
            </div>
           <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{route('show.market', $market->id)}}"> {{$market->market_name}} </a>
           </div>
           <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="دانلود" style="width:15px; display:inline-block" class=""> </a>
              </div>
         </div>     
        @empty
            
        @endforelse
</div>
<a  class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <img src="{{asset('assets/img/whatsapp-icon.svg')}}" alt="فروشندگان شبکه اجتماعی" class="size-icon">
        فروشندگان شبکه اجتماعی
      <img src="assets/img/svg element/رنگی.svg" alt="" class="size-icon">   
    </div>
        </a> 
        {{-- <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile16">
          <div class="item"><a href="" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div> --}}
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile17>
        @forelse ($messenger_seller as $messenger)
        <div class="item">
            <div class=""><a href="{{route('show.market', $messenger->id)}}" class=""> <img src="{{$messenger->images()->whereType('logo')->first()->address ?? '#'}}" alt="{{$messenger->market_name}}" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
            <div class="text-center mr-lg-5 mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
            </div>
           <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{route('show.market', $messenger->id)}}">{{$messenger->market_name}}</a>
           </div>
           <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="دانلود" style="width:15px; display:inline-block" class=""> </a>
              </div>
         </div>     
        @empty
            <p> فروشنده ای وجود ندارد </p>
        @endforelse
</div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="ضمانت" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala ">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="ضمانت" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="ضمانت" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection