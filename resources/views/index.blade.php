@extends('layout.master')
@section('content')
<!--start header2-->
<header>
    <nav class="navbar navbar-expand-lg   nav-box">
        <input type="search" name="" id="" placeholder="دنبال چی می گردی؟" class="p-2 form-control2 serch-box mt-lg-1">
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
    <div class="col-lg-12 col-lg-12w">
           <div class="text-right">
           <span class="discount">تخفیف بالای 20درصد</span>
           </div> 
           
           <div class="owl-carousel owl-theme mt-5" id=owl-mobile12>
                     <div class="product-card m-3">
                     <a href="https://google.com">
                     <span class="badge badge-danger badge-1">25%</span>
                      <span class="float-right Ready-to-send"> آماده ارسال<img src="assets/img/svg element/آماده ارسال جدید.svg" alt="" style="width:15px; display:inline-block" class="ml-1"></span>                      
            <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" style=""  alt="" class="pl-4 pr-4">
                  <caption>
                  <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                  </caption>
    <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span> </div>
           <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
           <span class="font-weight-bold">125,000تومان</span>
        </div>          
</a>
                 </div>
        </div>  
    </div>
    
        <a href="https://google.com" class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <img src="assets/img/svg element/مراکز خرید.svg" alt="">
         مراکز خرید
        </div>
        </a>
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile13>

        @forelse ($centers as $center)
            <div class="item">
               <div><a href=""> <img src="{{$center->image->address}}" style="width:175px; height:175px;" alt="" class="rounded-circle img-shopp" data-holder-rendered="true"></a></div>
               <div class="text-center  mt-2 mr-3">
               <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
               </div>
              <div class="mt-2 mr-3"> <a class="shopping-centre-caption" href=""> {{$center->name}} </a>
              </div>
              <div class="mt-2 mr-3">
                  <a href="" class="link-application">لینک دانلود اپلیکیشن</a>
              </div>
            </div>     
        @empty
            <p> مرکز خریدی وجود ندارد </p>
        @endforelse
    </div>

<a href="https://google.com" class="w-100">
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
            <div><a href=""> <img src="assets/img/10.png" style="width:175px; height:175px;" alt="" class="rounded-circle img-shopp" data-holder-rendered="true"></a></div>
            <div class="text-center mr-3  mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star"></span>
            </div>
           <div class="mt-2 mr-3"> <a class="shopping-centre-caption" href=""> {{$market->market_name}} </a>
           </div>
           <div class="mt-2 mr-3">
               <a href="" class="link-application"> لینک دانلود اپلیکیشن</a>
           </div>
         </div>     
        @empty
            
        @endforelse
</div>
<a href="https://google.com" class="w-100">
        <div class="shopping-centrew mt-5 p-3">
            <span class="Social-Networks pt-1 pb-1 pr-3 pl-3 ml-3"><img src="assets/img/svg element/واتساپ.svg" alt="">
            <img src="assets/img/svg element/اینستاگرام.svg" alt="">
            <img src="assets/img/svg element/تلگرام.svg" alt="">
        </span>
        فروشندگان شبکه اجتماعی
        </div>
        </a> 
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile16">
          <div class="item"><a href="" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div>
        <div class="owl-carousel owl-theme mt-5 text-center" id=owl-mobile17>
        @forelse ($messenger_seller as $messneger)
        <div class="item">
            <div><a href=""> <img src="assets/img/10.png" alt="" class="rounded-circle img-shopp" data-holder-rendered="true"></a></div>
            <div class="text-center  mt-2">
            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span>
            </div>
           <div class="mt-2"> <a class="shopping-centre-caption" href="">{{$messenger->persian_name}}</a>
           </div>
           <div class="mt-2">
               <a href="" class="link-application"> لینک دانلود اپلیکیشن</a>
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