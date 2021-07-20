@extends('layout.master')
@section('content')
<main style="margin-top:7em;">
    <div class="row">
        @forelse ($products as $product)
        <div class="col-lg-3 col-xl-3 col-6 pr-2 pl-2 mt-3">
            <div class="product-card text-center">

                <a href="{{route('product.single', $product->id)}}">
                    <span class="badge badge-danger badge-1 float-left"> {{$product->percentage()}} </span>
                    <span class="float-right Ready-to-send"> فروشنده : {{$product->product->market->market_name}}<img
                            src="assets/img/svg element/آماده ارسال جدید.svg" alt=""
                            style="width:15px; display:inline-block" class=""></span>

                    <img src="{{$product->product->pure->images->first()->address}}" alt=""
                        class="img-product-size1 img-fluid m-3">

                    <caption>
                        <p class="mt-3 caption-product mb-0">
                            {{$product->product->pure->persian_title}}
                        </p>
                    </caption>
                    <div class="text-center ml-3 mt-2"><span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
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



</main>
@endsection