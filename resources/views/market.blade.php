@extends('layout.master')
@section('content')
<main>
        <div class="col-lg-12">
        </div>
        <div class="mt-3">
                <div class="col-lg-12">
                        <div class="text-right">
                                <img src="{{$seller->images()->whereType("logo")->first()->address}}" alt=""
                                        class="rounded-circle" style="width: 80px;height:80px;">
                                <span class="discount"> {{$seller->market_name}} </span>
                                <a href="" class="link-application discount mr-3"><img
                                                src="{{asset('assets/img/svg element/دانلود.svg')}}" alt=""
                                                style="width:15px; display:inline-block" class="ml-2">لینک دانلود
                                        اپلیکیشن</a>
                                <div class="float-left bg-light p-3">
                                        <span class=""><img src="{{asset('assets/img/svg element/رنگی.svg')}}"
                                                        class="instagram1" alt=""></span>
                                        <span class="bazar2">whatsapp</span>
                                        <span class="mr-2"><img src="{{asset('assets/img/whatsapp-icon.svg')}}"
                                                        class="instagram1" alt=""></span>
                                        <span class="bazar2">telegram</span>
                                        <span class="mr-2"><img src="{{asset('assets/img/svg element/تلگرام2.svg')}}"
                                                        alt="" class="instagram1"></span>
                                        <span class="bazar2">instagram</span>
                                </div>
                        </div>
                        <img src="{{$seller->images()->whereType("market_picture")->first()->address}}" alt=""
                                width="100%" class="mt-1 bootik">
                </div>
        </div>
        <div class="col-lg-12">
                <div class="row">
                        <div class="col-lg-3 mt-3">
                        <a href="#categry" data-toggle="collapse" aria-expanded="false">
                                <div class="text-center category1">
                                      دسته بندی
                                </div>
                                </a>
                                <div class="box-categry text-center mt-2">
                                        <ul class="collapse pr-0 m-3" id="categry">
                                                <li><input type="search" name="" id=""
                                                                placeholder="جست وجو نام دسته بندی "
                                                                class="p-2 form-control2 serch-box2"></li>
                                                <li class="caption1">
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                                </li>
                                                <li class="caption2">
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                                </li>
                                                <li class="caption3">
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                                </li>
                                        </ul>
                                </div>
                                <a href="#brand" data-toggle="collapse" aria-expanded="false">
                                <div class="text-center category1">
                                        برند
                                </div>
                                </a>
                                <div class="box-categry text-center mt-2">
                                        <ul class="collapse pr-0 m-3" id="brand">
                                                <li><input type="search" name="" id="" placeholder="جست وجو در برند "
                                                                class="p-2 form-control2 serch-box2"></li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">آدیداس</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">آدیداس</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">آدیداس</label>
                                                </li>
                                        </ul>
                                </div>
                                <a href="#color" data-toggle="collapse" aria-expanded="false">
                                <div class="text-center category1">
                                        رنگ
                                </div>
                                </a>
                                <div class="box-categry text-center mt-2">
                                        <ul class="collapse pr-0 m-3" id="color">

                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">آبی</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">قرمز</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">سبز</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">سفید</label>
                                                </li>
                                        </ul>
                                </div>
                                <a href="#Price-range" data-toggle="collapse" aria-expanded="false">
                                <div class="text-center category1">
                                       محدوده
                                                قیمت
                                </div>
                                </a>
                                <div class="box-categry text-center mt-2">
                                        <ul class="collapse pr-0 m-3" id="Price-range">

                                                <li>
                                                        <div class="range-wrap mr-auto ml-auto">
                                                                <div class="range-value" id="rangeV"></div>
                                                                <input id="range" type="range" min="200" max="800"
                                                                        value="200" step="1" class="ps6">
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href="" class="link-range">از 100,000 تا 1,000,000 تومان</a>
                                                </li>
                                                <li>

                                                </li>
                                        </ul>
                                </div>
                                <a href="#size" data-toggle="collapse" aria-expanded="false">
                                <div class="text-center category1">
                                       سایز ها
                                </div>
                                </a>
                                <div class="box-categry text-center mt-2">
                                        <ul class="collapse pr-0 m-3" id="size">
                                                <li><input type="search" name="" id="" placeholder="جست وجو در سایز"
                                                                class="p-2 form-control2 serch-box2"></li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">M</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">L</label>
                                                </li>
                                                <li>
                                                        <input type="checkbox" name="" id="caption-categry">
                                                        <label for="caption-categry" class="mt-2">X</label>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                        <div class="col-lg-9">
                                <div class="row">
                                        <div class="content-categry text-right mt-3">
                                                <div class="m-3">
                                                        <a href="" class="Seller2">پربازدیدترین</a>
                                                        <a href="" class="Seller2 mr-sm-3">پرفروش ترین</a>
                                                        <a href="" class="Seller2 mr-sm-3">محبوب ترین</a>
                                                        <a href="" class="Seller2 mr-sm-3">ارزان ترین</a>
                                                        <a href="" class="Seller2 mr-sm-3">گران ترین</a>
                                                </div>
                                        </div>
                                        @forelse ($products as $product)
                                        <div class="col-lg-4">
                                                <div class="product-card m-3">
                                                        @if ($product->fulls->count())
                                                        <a href="{{ route('product.single' , $product->fulls->first()->id ?? '') }}">
                                                        @else
                                                        <a href="#">
                                                        @endif
                                                                <span class="badge badge-danger badge-1"> تخفیف ویژه </span>
                                                                <span class="float-right Ready-to-send mr-3"> آماده ارسال<img
                                                                                src="assets/img/svg element/آماده ارسال جدید.svg"
                                                                                alt=""
                                                                                style="width:15px; display:inline-block"
                                                                                class="ml-1"></span>
                                                                <img src="{{$product->pure->images->first()->address}}"
                                                                        alt=""  class="img-product-size1">
                                                                <caption>
                                                                        <p class="mt-3 caption-product mb-0">
                                                                        {{$product->pure->persian_title}}
                                                                        </p>
                                                                </caption>
                                                                <div class="text-center ml-3 mt-2"><span
                                                                                class="fa fa-star checked"></span> <span
                                                                                class="fa fa-star checked"></span> <span
                                                                                class="fa fa-star checked"></span> <span
                                                                                class="fa fa-star checked"></span><span
                                                                                class="fa fa-star"></span> </div>
                                                                <div class="text-center mt-2 pb-3"><span
                                                                                class="price-line"> {{number_format($product->pure->price)}} </span>  <br> 
                                                                       @if ($product->fulls->count())
                                                                       <span
                                                                       class="font-weight-bold"> تومان {{  number_format($product->fulls()->orderBy('price','asc')->get('price')->first()->price) ?? 'ناموجود' }}  </span>   
                                                                       @else
                                                                       <span
                                                                       class="font-weight-bold">  ناموجود </span>   
                                                                       @endif
                                                                </div>
                                                        </a>
                                                </div>
                                        </div>  
                                        
                                        @empty

                                        @endforelse
                                </div>
                        </div>
                        <nav aria-label="Page navigation example" class="mr-auto ml-auto mt-5">
                                <div class="row">
                                        <a href="">
                                                <div
                                                        class="pagaition1 d-flex justify-content-center align-items-center">
                                                        1
                                                </div>
                                        </a>
                                        <a href="">
                                                <div
                                                        class="pagaition1 d-flex justify-content-center align-items-center">
                                                        2
                                                </div>
                                        </a>
                                        <a href="">
                                                <div
                                                        class="pagaition1 d-flex justify-content-center align-items-center">
                                                        3
                                                </div>
                                        </a>
                                        <a href="">
                                                <div
                                                        class="pagaition1 d-flex justify-content-center align-items-center">
                                                        <img src="{{ asset('assets/img/فلش صفحه بعدی.svg') }}" alt="">
                                                </div>
                                        </a>
                                </div>
                        </nav>
                </div>
        </div>
        </div>
        </div>
</main>

@endsection