@extends('Market.layout.master')
@section('content')
<main class="mt-3">
    <div class="content6 pr-3 pl-3">
        <div class="owl-carousel owl-theme mt-3" id="owl-mobile35">
            @forelse ($product->images as $image)
            <div class="item"><img src="{{$image->address}}" alt="" class="product-size"></div>
            @empty
                
            @endforelse
        </div>
        <caption>
            <p> {{$product->persian_title}} </p>
        </caption>
        <p>
            {{$product->title}}        
        </p>
        <div class="mt-3">
            <span>برند:</span>
            <span class="link-brand">{{$product->brand->persian_name}}</span>
        </div>
        <div class="mt-3">
            <span>دسته بندی:</span>
            <span class="link-brand">{{$product->category->persian_name}}</span>
        </div><br>
        <span class="">
            توضیحات محصول:
        </span><br><br>
        <span>
            {{$product->description}}
        </span><br><br>
    </div>
</main>
@endsection