@extends('layout.master')
@section('head')
<title> فروشگاه اینترنتی {{$seller->market_name}} </title>
<meta property="og:title" content=" فروشگاه اینترنتی {{$seller->market_name}} " />
<meta property="og:description" content="{{$seller->description ?? ''}}" /> 
<meta name="description" content="{{$seller->description ?? ''}}" />
@endsection
@section('content')
<main>
    <div class="col-lg-12">   
    </div>
        <div class="col-lg-12w">
                <div class="col-lg-12">
                        <div class="text-right">
                                <img src="{{$seller->images()->whereType("logo")->first()->address}}" alt=""
                                        class="rounded-circle" style="width: 80px;height:80px;">
                                <span class="discount"> {{$seller->market_name}} </span>
                                @if (!is_null($seller->applink))
                                <a href="{{$seller->applink ?? ''}}" class="link-application discount mr-3"><img
                                        src="{{asset('assets/img/svg element/دانلود.svg')}}" alt=""
                                        style="width:15px; display:inline-block" class="ml-2">لینک دانلود
                                اپلیکیشن</a>    
                                @endif
                                
                                <div class="float-left bg-light p-3 mt-3">
                                        <a href="{{'https://instagram.com/' . $market->instagram ?? ''}}">
                                        <span class="bazar2">instagram</span>
                                        <span class=""><img src="{{asset('assets/img/svg element/رنگی.svg')}}"
                                                        class="instagram1" alt=""></span></a>
                                        <a href="{{'https://wa.me/+98' . $seller->user->phone_number}}">
                                        <span class="bazar2">whatsapp</span>
                                        <span class="mr-2"><img src="{{asset('assets/img/whatsapp-icon.svg')}}"
                                                        class="instagram1" alt=""></span></a>
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
                                        <div class="content-categry text-right mt-3 w-98">
                                                <div class="m-3">
                                                        <form action="{{route('show.market',$seller->id)}}"
                                                                method="get">
                                                                <button class="Seller2{{$sort == 'viewed' ? ' Seller2-active' : ''}}"
                                                                        value="viewed" name="sort" type="submit">
                                                                        پربازدیدترین
                                                                </button>
                                                                <button class="Seller2{{$sort == 'desc' ? ' Seller2-active' : ''}}"
                                                                        value="desc" name="sort" type="submit">
                                                                        ارزان ترین
                                                                </button>
                                                                <button class="Seller2{{$sort == 'asc' ? ' Seller2-active' : ''}}"
                                                                        value="asc" name="sort" type="submit">
                                                                        گران ترین
                                                                </button>
                                                                <button class="Seller2{{$sort == 'created' ? ' Seller2-active' : ''}}"
                                                                        value="created" name="sort" type="submit">
                                                                        جدید ترین
                                                                </button>
                                                        </form>
                                                </div>
                                        </div>
                                        @forelse ($products as $product)
                                        <div class="col-lg-4 col-xl-4 col-6 pr-2 pl-2 mt-3">
                                                <div class="product-card text-center">
                                                        @if ($product->count())
                                                        <a href="{{ route('product.single' , $product->id ?? '') }}">
                                                                @else
                                                                <a href="#">
                                                                        @endif
                                                                        <span class="badge badge-danger badge-1 float-left"> %{{$product->percentage()}} </span>
                                                                        <br> <br>
                                                                        <img src="{{$product->product->pure->images->first()->address}}"
                                                                                alt="" class="img-product-size1">
                                                                        <caption>
                                                                                <p class="mt-3 caption-product mb-0">
                                                                                        {{mb_substr($product->product->pure->persian_title,0,30)}}
                                                                                </p>
                                                                        </caption>
                                                                        <div class="text-center ml-3 mt-2"><span
                                                                                        class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span
                                                                                        class="fa fa-star checked"></span><span
                                                                                        class="fa fa-star"></span>
                                                                        </div>
                                                                        <div class="text-center mt-2 pb-3"><span
                                                                                        class="price-line">
                                                                                        {{number_format($product->show_price)}}
                                                                                </span> <br>
                                                                                @if ($product->count())
                                                                                <span
                                                                                        class="font-weight-bold prodict-price3">
                                                                                        تومان
                                                                                        {{  number_format($product->price) ?? 'ناموجود' }}
                                                                                </span>
                                                                                @else
                                                                                <span
                                                                                        class="font-weight-bold prodict-price3">
                                                                                        ناموجود </span>
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
                                        {{-- <div class="pagaition1 d-flex justify-content-center align-items-center">
                                        </div> --}}
                                        
                                                {{$products->links()}}
                                        
                                </div>
                        </nav>
                </div>
        </div>
        </div>
        </div>
</main>

@endsection