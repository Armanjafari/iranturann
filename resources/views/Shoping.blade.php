@extends('layout.master')
@section('content')
<!--start main-->
<main>
    <div class="col-lg-12">
    </div>
    <div class="mt-3">
        <div class="col-lg-12">
            <div class="text-right">
                <span class="discount"> {{$center->name}} </span>
                <div class="float-left bg-light p-3">
                    <a href="{{ 'https://instagram.com/' . $center->instagram ?? '#' }}">
                        <span class=""><img src="{{asset('assets/img/svg element/رنگی.svg')}}" class="instagram1"
                                alt=""></span>
                    </a>
                    <a href="{{ "https://wa.me/" . $center->phone_number}}">bazar bozorg@
                        <span class="mr-2"><img src="{{asset('assets/img/icons8-whatsapp.svg')}}" class="instagram1"
                                alt=""></span>
                    </a>
                    <span>bazar bozorg@</span>
                    <span class="mr-2"><img src="{{asset('assets/img/svg element/تلگرام2.svg')}}" alt=""
                            class="instagram1"></span>
                    <span>bazar bozorg@</span>
                </div>
            </div>
            <div class="owl-carousel owl-theme mt-5" id="owl-mobile30">
            <!-- <img src="{{ $center->image->address }}" alt="" width="100%" class="mt-1 bootik"> -->
            <div class="item">  <img src="{{asset('assets/img/WhatsApp Image 2021-07-07 at 17.57.11.jpeg')}}" alt="" width="100%" class="mt-1 bootik"> </div>
         <div class="item">  <img src="{{asset('assets/img/WhatsApp Image 2021-07-07 at 17.57.12.jpeg')}}" alt="" width="100%" class="mt-1 bootik"></div> 
         <div class="item"> <img src="{{asset('assets/img/WhatsApp Image 2021-07-07 at 17.57.13.jpeg')}}" alt="" width="100%" class="mt-1 bootik"></div>
       
            </div>
        </div>
    </div>

    <div class="col-lg-12  col-12 pr-0 pl-0">
        <div class="owl-carousel owl-theme mt-5" id="owl-mobile5">
            @forelse ($users as $item)
            <div class="item item1">
                <div class="card card-shopping2">
                    <div class="card-body pr-0 pl-0 text-center">
                        <div class="col-lg-8 ml-auto mr-auto col-12">
                            <a href="{{route('show.market', $item->id)}}"> <img
                                    src="{{$item->images()->whereType('logo')->first()->address}}" alt=""
                                    class="rounded-circle img-shopp ml-auto mr-auto size-img size-img1 img-fluid" data-holder-rendered="true"></a>
                        </div>
                        <div action="" class="mt-3 ml-2">
                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span
                                class="fa fa-star unchecked"></span>
                        </div>
                        <div class="mt-2">
                            <caption><a href="{{route('show.market', $item->id)}}"> {{$item->market_name}} </a>
                            </caption>
                        </div>
                        <div class="mt-2">
                            <span> {{$item->user->shipings->address}}</span>
                        </div>
                        <div class="mt-2">
                            <a href="" class="link-application">لینک دانلود اپلیکیشن</a>
                            <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt=""
                                style="width:10px; display:inline-block" class="ml-1">
                        </div>
                    </div>
                </div>
            </div>
            @empty
            فروشنده ای برای این مرکز وجود ندارد
            @endforelse

        </div>
        <div class="owl-carousel owl-theme mt-5 text-center" id="owl-mobile29">
          <div class="item"><a href="" class="Seller">لوزام برقی</a></div>
          <div class="item"><a href="" class="Seller">پوشاک</a></div>
          <div class="item"><a href="" class="Seller">دیجیتال</a></div>
          <div class="item"><a href="" class="Seller">مواد غذایی</a></div>
          <div class="item"><a href="" class="Seller">لوازم التحریر</a></div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="product-card m-3">
                    <a href="https://google.com">
                        <span class="badge badge-danger badge-1">25%</span>
                        <span class="float-right Ready-to-send mr-2"> آماده ارسال<img
                                src="{{asset('assets/img/svg element/آماده ارسال جدید.svg')}}" alt=""
                                style="width:15px; display:inline-block" class="ml-1"></span>
                        <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" alt=""  class="img-product-size">
                        <caption>
                            <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                        </caption>
                        <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span><span class="fa fa-star"></span> </div>
                        <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
                            <span class="font-weight-bold">125,000تومان</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-card m-3">
                    <a href="https://google.com">
                        <span class="badge badge-danger badge-1">25%</span>
                        <span class="float-right Ready-to-send mr-2"> آماده ارسال<img
                                src="{{asset('assets/img/svg element/آماده ارسال جدید.svg')}}" alt=""
                                style="width:15px; display:inline-block" class="ml-1"></span>
                        <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" alt=""  class="img-product-size">
                        <caption>
                            <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                        </caption>
                        <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span> </div>
                        <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
                            <span class="font-weight-bold">125,000تومان</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-card m-3">
                    <a href="https://google.com">
                        <span class="badge badge-danger badge-1">25%</span>
                        <span class="float-right Ready-to-send mr-2"> آماده ارسال<img
                                src="{{asset('assets/img/svg element/آماده ارسال جدید.svg')}}" alt=""
                                style="width:15px; display:inline-block" class="ml-1"></span>
                        <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" alt=""  class="img-product-size">
                        <caption>
                            <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                        </caption>
                        <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span><span class="fa fa-star unchecked mr-2"></span> </div>
                        <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
                            <span class="font-weight-bold">125,000تومان</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-card m-3">
                    <a href="https://google.com">
                        <span class="badge badge-danger badge-1">25%</span>
                        <span class="float-right Ready-to-send mr-2"> آماده ارسال<img
                                src="{{asset('assets/img/svg element/آماده ارسال جدید.svg')}}" alt=""
                                style="width:15px; display:inline-block" class="ml-1"></span>
                        <img src="{{ asset('assets/img/01-2removebg-preview.png') }}" alt=""  class="img-product-size">
                        <caption>
                            <p class="mt-3 caption-product mb-0">هودی ادی داس طرح زمستانه</p>
                        </caption>
                        <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span><span class="fa fa-star unchecked mr-2"></span> </div>
                        <div class="text-center mt-2 pb-3"><span class="price-line">130,000تومان</span>
                            <span class="font-weight-bold">125,000تومان</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mr-auto ml-auto mr-5">
            <nav aria-label="Page navigation example" class=" mt-5">
                <div class="row">
                    <a href="">
                        <div class="pagaition1 d-flex justify-content-center align-items-center">
                            1
                        </div>
                    </a>
                    <a href="">
                        <div class="pagaition1 d-flex justify-content-center align-items-center">
                            2
                        </div>
                    </a>
                    <a href="">
                        <div class="pagaition1 d-flex justify-content-center align-items-center">
                            3
                        </div>
                    </a>
                    <a href="">
                        <div class="pagaition1 d-flex justify-content-center align-items-center">
                            <img src="{{ asset('assets/img/فلش صفحه بعدی.svg') }}" alt="">
                        </div>
                    </a>
                </div>
            </nav>
            </div>
        </div>
        <!-- <div class="col-lg-4">
    <div class="text-center">
<a href="" class="nav-link nav-link1">1</a>
 </div>
 </div> -->
</main>
@endsection