@extends('layout.master')
@section('content')
<main>
    <br> <br> <br>
    <div class="col-lg-12">
        <div class="text-right">
            <span class="discount"> فروشندگان و مراکز خرید </span>
        </div>
        <div class="owl-carousel owl-theme mt-3" id="owl-mobile5">
            @forelse ($centers as $center)
            <div class="item item1">
                <div class="card card-shopping2 card-shopping3">
                    <div class="text-right">
                        <span class="float-right text-right Ready-to-send w-25" style="font-size: 14px"> مراکز خرید
                        </span></div>

                    <div class="card-body pr-0 pl-0 text-center">

                        <div class="col-lg-8 ml-auto mr-auto col-12">

                            <a href="{{route('sellers.by.centers', $center->id)}}"> <img
                                    src="{{$center->image->address}}" alt=""
                                    class="rounded-circle img-shopp ml-auto mr-auto size-img size-img1 img-fluid"
                                    data-holder-rendered="true"></a>
                        </div>
                        <div class="mt-3 ml-2">
                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span
                                class="fa fa-star unchecked"></span>
                        </div>
                        <div class="mt-2">
                            <caption><a href="{{route('sellers.by.centers', $center->id)}}" style="font-size: 18px">
                                    {{$center->name}}</a>
                            </caption>
                        </div>
                        <div class="mt-2">
                            <span> </span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="link-application link-application3">لینک دانلود اپلیکیشن</a>
                            <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt=""
                                style="width:10px; display:inline-block" class="ml-1">
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
            @forelse ($markets as $market)
            <div class="item item1">
                <div class="card card-shopping2 card-shopping3">
                    <div class="text-right">
                        <span class="float-right text-right Ready-to-send w-20" style="font-size: 15px"> فروشنده </span>
                    </div>
                    <div class="card-body pr-0 pl-0 text-center">
                        <div class="col-lg-8 ml-auto mr-auto col-12">
                            <a href="{{route('show.market', $market->id)}}"> <img
                                    src="{{$market->images()->where('type', 'logo')->first()->address}}" alt=""
                                    class="rounded-circle img-shopp ml-auto mr-auto size-img size-img1 img-fluid"
                                    data-holder-rendered="true"></a>
                        </div>
                        <div class="mt-3 ml-2">
                            <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span
                                class="fa fa-star unchecked"></span>
                        </div>
                        <div class="mt-2">
                            <caption><a href="{{route('show.market', $market->id)}}" style="font-size: 18px">
                                    {{$market->market_name}} </a>
                            </caption>
                        </div>
                        <div class="mt-2">
                            <span> </span>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="link-application link-application3">لینک دانلود اپلیکیشن</a>
                            <img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt=""
                                style="width:10px; display:inline-block" class="ml-1">
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
        <div class="row">
            @forelse ($products as $product)
            <div class="col-lg-3 col-xl-3 col-6 pr-2 pl-2">
                <div class="product-card text-center">

                    <a href="{{route('product.single',$product->id)}}">



                        <span class="badge badge-danger badge-1 float-left"> %{{$product->percentage()}}</span>
                        <span class="float-right Ready-to-send"> {{$product->product->market->market_name}}</span>

                        <img src="{{$product->product->pure->images->first()->address}}" alt="" class="img-product-size1 img-fluid m-3">

                        <caption>
                            <p class="mt-3 caption-product mb-0">
                                {{$product->product->pure->persian_title}}
                            </p>
                        </caption>
                        <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                class="fa fa-star checked"></span><span class="fa fa-star"></span> </div>
                        <div class="text-center mt-2"><span class="price-line">
                                {{number_format($product->show_price)}}تومان </span>

                        </div>
                        <div class="mt-2 mb-3">
                            <span class="font-weight-bold prodict-price3"> {{number_format($product->price)}}تومان </span>
                        </div>
                    </a>
                </div>
            </div>
            @empty
                
            @endforelse

        </div>
    </div>
</main>
@endsection