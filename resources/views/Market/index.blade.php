@extends('Market.layout.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="mr-auto ml-auto mt-5">
            <a href="" class="btn-warning p-3 product-new2">
                ایجاد کالای جدید
            </a>
        </div>
    </div>
    <br> <br>
    <div class="card serch-moving">
        <div class="card-body serch-moving">
            <div class="container-2">
                <input type="text" placeholder="serch...">
                <div class="serch"></div>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse ($categories as $category)
        @forelse ($category->products as $product)
        <div class="col-lg-3 mt-5">
            <form action="{{ route('market.add.product') }}" method="post">
                @csrf
                <div class="card text-center">
                    <img class="card-img-top"
                        src="https://dkstatics-public.digikala.com/digikala-products/325689.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"
                        alt="هپل">
                    <div class="card-body">
                        <select name="product" style="visibility:hidden;">
                            <option value="{{$product->id}}"></option>
                        </select>
                        <h5 class="card-title"> {{$product->persian_title}} </h5>
                        <p class="card-text">{{ ' شناسه     محصول : ' . $product->id }}</p>
                        @if (!Auth::user()->market->products()->wherePure_id($product->id)->first())
                        <input type="submit" value="افزودن" class="btn btn-primary pl-5 pr-5 pt-2 pb-2">
                        @else
                        <input disabled type="submit" value="شما فروشنده هستید"
                            class="btn btn-primary pl-5 pr-5 pt-2 pb-2">
                        @endif
                    </div>
                </div>
            </form>
        </div>
        @empty
        محصولی وجود ندارد
        @endforelse

        @empty
        محصولی وجود ندارد
        @endforelse
    </div>

</div>
@endsection