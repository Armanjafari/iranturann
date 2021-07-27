@extends('Market.layout.master')
@section('content')
<main class="mt-4">
    <!-- start add-product box-->
    <form action="{{ route('market.search') }}" method="get">

        <div class="col-lg-12 d-flex justify-content-center">
            <input type="search" name="query" id="" placeholder="دنبال چی می گردی؟" class="p-1 form-control serch-box">
    </form>
    </div>
    <div class="owl-carousel owl-theme mt-3 text-center" id="owl-mobile20">
        @forelse ($categories as $category)
        <div class="item"><a href="" class="Seller"> {{$category->persian_name}} </a></div>

        @empty

        @endforelse
    </div>
    <div class="text-center mt-2">
            <a href="{{ route('Prodcut.registraition.form') }}" class="btn btn-success btn-font-add">
                <i class="fa fa-plus"></i>
                افزودن محصول
            </a>
        </div>
    <div class="col-lg-12 mt-4 pr-0 pl-0">
        <!-- <div class="w-50 mr-auto ml-auto"> <a href="">
                <p class="discount">دیدن تمام محصولات این دسته بندی</p>
            </a></div> -->
            <div class="row">
            @forelse ($categories as $category)
            @forelse ($category->products as $product)
            <form action="{{ route('market.add.product') }}" method="post" class="mr-2">
                @csrf
                <div class="product-card col-12 mb-3">
                    <a href="{{route('owner.product',$product->id)}}" class="w-100">
                        <img src="{{ $product->images->first()->address ?? '#' }}" alt=""
                            class="img-product-size mr-auto ml-auto">
                        <caption>
                            <p class="mt-3 caption-product mb-0">{{mb_substr($product->persian_title ,0,20)}}</p>
                        </caption>
                        <select name="product" style="display: none">
                            <option value="{{$product->id}}"></option>
                        </select>
                        @if (!Auth::user()->market->products()->wherePure_id($product->id)->first())
                        <div class="text-center caption-product mt-1">
                            <button type="submit" class="btn btn-primary caption-product p-1 mb-2"> فروشنده
                                شوید</button>
                        </div>

                        @else
                        <div class="text-center caption-product mt-1">
                            <button disabled class="btn btn-primary caption-product p-1 mb-2"> شما فروشنده هستید
                            </button>
                        </div>
                        @endif
                    </a>
                </div>
            </form>
            @empty
            @endforelse

            @empty

            @endforelse
        </div>
       
        <br><br><br><br>

    </div>
    @endsection