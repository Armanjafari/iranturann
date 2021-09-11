@extends('mobile.layout.master')
@section('content')
<div class="container-fluid mb-5">
    <div class="row mb-5">
      <div class="w-100 box-product-header">
        <div class="row m-0">
          <div class="col-2 pl-0">
            <div class="text-right category2">
              <a href="{{ url()->previous() }}">
                <img
                  src="{{asset('assets/mobile/img/svg/1303887_arrow_arrows_circle_direction_forward_icon.svg')}}"
                  class="svg-back"
                  alt=""
                />
              </a>
            </div>
          </div>
          <div class="col-10 text-right category2 pr-0">
            <form action="{{ route('mobile.search',$market->id) }}" method="GET">
                @csrf
              <input value="{{$query ?? ''}}" name="query" type="search" class="category3 font12" placeholder="مثال جارو برقی" />
            </form>
          </div>
        </div>
      </div>
      <!-- start box product -->
      @forelse ($products as $full)
      <div class="col-6 text-center mt-3">
          <div class="box-product p-2">
              <a href="{{route('mobile.product.single',['option'=> $full->id,'market' => $market->id])}}">
                  <figure>
                      <img src="{{$full->product->pure->images->first()->address ?? ''}}" alt="" class="img-product" />
                  </figure>
                  <figcaption>
                      <p class="font10 mb-0">{{mb_substr($full->product->pure->persian_title,0,18)}}</p>
                  </figcaption>
                  <div class="text-center stare-box">
                      <span class="fa fa-star unchecked" aria-hidden="true"></span>
                      <span class="fa fa-star" aria-hidden="true"></span>
                      <span class="fa fa-star" aria-hidden="true"></span>
                      <span class="fa fa-star" aria-hidden="true"></span>
                      <span class="fa fa-star" aria-hidden="true"></span>
                  </div>
                  <span class="price-line font7">{{number_format($full->show_price)}}تومان</span>
                  <p class="d-inline-block font7 Discount mb-0">%{{$full->percentage()}}</p>
                  <p class="font10 mt-1">{{number_format($full->price)}}تومان</p>
              </a>
          </div>
      </div>
      @empty
         <p class="mr-auto ml-auto"> محصولی برای این دسته بندی وجود ندارد </p>
      @endforelse
      <!-- end product box -->
    </div>
  </div>
@endsection