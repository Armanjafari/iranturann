@extends('Market.layout.master')
@section('content')
<main class="mt-4">
    <!-- start add-product box-->
    <form action="{{ route('market.search') }}" method="get">

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
<div class="col-lg-12 mt-3 pr-0 pl-0">
  <div class="w-50 mr-auto ml-auto"> <a href=""><p class="discount">دیدن تمام محصولات این دسته بندی</p></a></div>
  <div class="owl-carousel owl-theme mt-2" id=owl-mobile12>  
  @forelse (Auth::user()->market->products as $product)
        <form action="{{ route('market.variety.add.form') }}" method="GET">
            @csrf
        <div class="product-card mb-3">
            <a class="w-100" href="{{route('market.variety.index',$product->id)}}">


                <img src="{{ $product->pure->images->first()->address ?? '#' }}" alt=""
                    class="img-product-size mr-auto ml-auto">
                <caption>
                    <p class="mt-3 caption-product mb-0">{{$product->persian_title}}</p>
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

<div class="text-center mt-2">
    <a href="{{route('market.index')}}" class="btn btn-success">
        <i class="fa fa-plus"></i>
       افزودن محصول به فروشگاه
    </a>
</div><br><br><br><br>
  </div>
@endsection