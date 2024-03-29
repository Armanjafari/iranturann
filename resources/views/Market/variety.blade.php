@extends('Market.layout.master')
@section('content')
<main class="mt-4">
    <!-- start add-product box-->
    <form action="{{ route('market.index.search') }}" method="get">
    <div class="col-lg-12 d-flex justify-content-center">
    <input type="search" name="query" id="" placeholder="دنبال چی می گردی؟" class="p-1 form-control serch-box">
        </form>    
</div>
<div class="owl-carousel owl-theme mt-4 text-center" id="owl-mobile20">
@forelse ($categories as $category)
<div class="item"><a href="" class="Seller"> {{$category->persian_name}} </a></div>

@empty

@endforelse
</div>
<div class="text-center mt-5">
    <a href="{{route('market.index')}}" class="btn btn-success btn-font-add">
        <i class="fa fa-plus"></i>
       افزودن محصول به فروشگاه
    </a>
</div>
<div class="col-lg-12 mt-4 pr-0 pl-0">
 <div class="row">
  @forelse (Auth::user()->market->products as $product)
        <form action="{{ route('market.variety.add.form') }}" method="GET" class="mr-2">
            @csrf
        <div class="product-card col-12 mb-3">
            <a class="owner-product" href="{{route('market.variety.index',$product->id)}}">
                <img src="{{ $product->pure->images->first()->address ?? '#' }}" alt=""
                    class="img-product-size mr-auto ml-auto">
                <caption>
                    <p class="mt-3 caption-product mb-0">{{mb_substr($product->pure->persian_title ,0,20)}}</p>
                </caption>
                <select name="product" style="display: none">
                    <option value="{{$product->id}}"></option>
                </select>
                <div class="text-center caption-product mt-1">
                    <button type="submit" class="btn btn-primary caption-product p-1 mb-2"> قیمت گذاری </button>
                </div>
            </a>
        </div>
        </form>
@empty

@endforelse

</div>
<br><br><br><br>
  </div>
@endsection