@extends('layout.master')
@section('content')
<!--start header2-->
<header>
    <nav class="navbar navbar-expand-lg   nav-box">
        <input type="search" name="" id="" placeholder="دنبال چی می گردی؟" class="p-2 form-control2 serch-box mt-lg-1">
        <!-- <div class="c-search__results text-right">
            <img src="assets/img/svg element/ice-cream (1).svg" alt="" class="icon-seller"> -->
            <!-- <a href="" class="Seller mr-3 mt-3 mt-lg-0">فروشنده موبایل</a>
            <a href="" class="Seller mr-3 mt-3 mt-lg-0">فروشنده موبایل</a>
            <a href="" class="Seller mr-3 mt-3 mt-lg-0">فروشنده موبایل</a> -->
            <!-- <div class="owl-carousel owl-theme mt-3" id="owl-mobile-6">
                 <div class="item"> <a href="" class="Seller">فروشنده موبایل</a></div> -->
                <!-- </div>
                <a href="#" class> -->
                  
               <!-- </a> -->
                <!-- <div class="owl-carousel owl-theme mt-3" id="owl-mobile-7">
                    <div class="content-5 d-flex p-3">
                        <img src="assets/img/گوشی-موبایل-آیفون-12-removebg-preview.png" alt="" width="100">
                         <a href="" class="">سلام</a>    
                   </div>  
                </div>
       </div> -->
        <div class="dropdown dropdown-city mr-auto">
            <button class="btn  dropdown-toggle dropdown-city-button pl-5 mt-lg-1" type="button" id="dropdown_coins"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               لار
            </button>
            <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
                <form class="px-4 py-2">
                    <input type="search" class="form-control search-city" id="searchCoin" placeholder="شهر مورد نظر"
                        autofocus="autofocus">
                </form>
                <div id="menuItems"></div>
                <div id="empty" class="dropdown-header">شهر مورد نظر شما پیدا نشد</div>
            </div>
        </div>
    </nav>
</header>
<!-- end navbar !-->
<main>
    <div class="row">
    <div class="col-lg-8 col-lg-12w">
    <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile25">
    <div class="item"><img src="assets/img/unnamed.jpg" alt=""></div>
    <div class="item"><img src="assets/img/ss.jpg" alt=""></div>
    </div>
    </div>
    <div class="col-lg-4 col-lg-12w">
    <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile26">
   <div class="item"><img src="assets/img/unnamed.jpg" alt=""></div>
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
            <img src="assets/img/svg element/مراکز خرید.svg" alt="">
         مراکز خرید
        </div>
        </a>
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile13>

        @forelse ($centers as $center)
            <div class="item">
               <div><a href="{{ route('sellers.by.centers',$center->id) }}"> <img src="{{$center->image->address}}" alt="" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
               <div class="text-center  mt-2 mr-lg-5">
               <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
               </div>
              <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{ route('sellers.by.centers',$center->id) }}"> {{$center->name}} </a>
              </div>
              <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="" style="width:15px; display:inline-block" class=""> </a>
              </div>
            </div>     
        @empty
            <p> مرکز خریدی وجود ندارد </p>
        @endforelse
    </div>

<a class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <img src="assets/img/svg element/فروشنده.svg" alt="">
         فروشندگان
        </div>
        </a> 
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile14">
          <div class="item"><a href="" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div>
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile15>
        @forelse ($markets as  $market)
        <div class="item">
            <div><a href="{{route('show.market', $market->id)}}"> <img src="{{$market->images()->whereType('logo')->first()->address}}" alt="" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
            <div class="text-center mr-lg-5 mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
            </div>
           <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{route('show.market', $market->id)}}"> {{$market->market_name}} </a>
           </div>
           <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="" style="width:15px; display:inline-block" class=""> </a>
              </div>
         </div>     
        @empty
            
        @endforelse
</div>
<a  class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <span class="Social-Networks pt-1 pb-1 pr-3 pl-3 ml-3"><img src="{{asset('assets/img/whatsapp-icon.svg')}}" alt="">
            <img src="assets/img/svg element/اینستاگرام.svg" alt="">
            <img src="assets/img/svg element/تلگرام.svg" alt="">
        </span>
        فروشندگان شبکه اجتماعی
        </div>
        </a> 
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile16">
          <div class="item"><a href="#gba" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div>
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile17>
        @forelse ($messenger_seller as $messenger)
        <div class="item">
            <div class=""><a href="{{route('show.market', $messenger->id)}}" class=""> <img src="{{$messenger->images()->whereType('logo')->first()->address ?? '#'}}" alt="a" class="rounded-circle img-shopp size-img" data-holder-rendered="true"></a></div>
            <div class="text-center mr-lg-5 mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
            </div>
           <div class="mt-2 mr-lg-5"> <a class="shopping-centre-caption" href="{{route('show.market', $messenger->id)}}">{{$messenger->market_name}}</a>
           </div>
           <div class="mt-2 mr-lg-5">
              <a href="" class="link-application discount mr-3">لینک دانلود اپلیکیشن  <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="" style="width:15px; display:inline-block" class=""> </a>
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
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala ">
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
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection