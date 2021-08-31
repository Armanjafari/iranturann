@extends('mobile.layout.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row mb-5">
            <!-- start search box -->

              <div class="col-12  mt-3">
                  <form action="">
                  <input type="search" class="form-control form-control-1" placeholder="جستجو...">
                </form>
                </div>
             <!-- end search box -->
            <!-- start img seller -->
             <div class="col-12 text-right mt-3">
                 <div class="row">
                <img src="{{$seller->images()->whereType("logo")->first()->address}}" alt="" class="rounded-circle mr-2 seller-img">
            
            <!-- end img seller -->
            <!-- start text seller -->
            
                <form>
                    <button class="font7 p-2 seller-text mr-2 mt-3">{{ $seller->market_name }}</button>
                    <a href="{{ $seller->app ?? '' }}" class="font7 p-2 seller-text mr-2 mt-3">لینک دانلوداپلیکیشن</a>
                    <button class="font7 p-2 seller-text mr-2 mt-3">{{ $seller->user->phone_number }}</button>
                 </form>
   
            <!-- end text seller -->
            <!-- start icons instagram and whatsapp-->
            <a href="{{'https://instagram.com/' . $market->instagram ?? ''}}">
               <img src="{{asset('assets/mobile/img/svg/insta.svg')}}" alt="" class="Social-Networks mr-2 mt-3"></a>
               <a href="{{'https://wa.me/+98' . $market->user->phone_number}}">
                   <img src="{{asset('assets/mobile/img/svg/whatsapp-icon.svg')}}" alt="" class="Social-Networks mr-2 mt-3"> </a>
        </div>
    </div>
            <!-- end icons instagram and whatsapp-->
            <!-- start banner img -->
            <div class="col-lg-12 mt-3">
              <img src="{{$seller->images()->whereType("market_picture")->first()->address}}" alt="" class="img-fluid banner">
            </div>
            <!-- end banner img -->
            <!-- start filter -->
         <div class="col-lg-12 text-right mt-3">
             <form action="{{route('mobile.show.market',$seller->id)}}">
                 <button type="submit" value="asc" name="sort" class="font10 p-2 mr-3 seller-text">گران ترین</button>
                 <button type="submit" value="desc" name="sort" class="font10 p-2 mr-3 seller-text">ارزان ترین</button>
                 <button type="submit" value="created" name="sort" class="font10 p-2 mr-3 seller-text">جدید ترین</button>
                 <button type="submit" value="viewed" name="sort" class="font10 p-2 mr-3 seller-text">پربازدید ترین</button>
                </form> 
        </div>
            <!-- end filter -->
            <!-- start product box -->
            @forelse ($products as $product)

            <div class="col-6 text-center mt-3">
                <div class="box-product p-2">
                    @if ($product->count())
                    <a href="{{ route('mobile.product.single' ,['market' =>$market->id,'option' => $product->id ?? '']) }}">
                            @else
                            @endif
                <figure>
                 <img src="{{$product->product->pure->images->first()->address}}" alt="" class="img-product">
                </figure>
                <figcaption>
                    <p class="font10 mb-0">{{mb_substr($product->product->pure->persian_title,0,30)}}</p>
                </figcaption>
                <div class="text-center stare-box">
                    <span class="fa fa-star unchecked" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                   
               </div>
               <span class="price-line font7">
                   {{number_format($product->show_price)}}
            </span>
            @if ($product->count())

               <p class="d-inline-block font7 Discount mb-0">%{{$product->percentage()}}</p>
               <p class="font10 mt-1">تومان
                {{  number_format($product->price) ?? 'ناموجود' }}</p>
                </a>
                @else
                <span class="font-weight-bold prodict-price3">
                        ناموجود </span>
                @endif
            </div>
            </div>
            @empty
                
            @endforelse
            <nav aria-label="Page navigation example" class="mr-auto ml-auto mt-5">
                <div class="row">
                       

                        {{$products->links()}}

                </div>
        </nav>
        </div>
    </div>
        @endsection