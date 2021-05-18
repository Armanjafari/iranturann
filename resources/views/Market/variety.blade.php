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
        @forelse (Auth::user()->market->products as $product)
        <div class="col-lg-3 mt-5">
            <form action="{{ route('market.variety.add.form') }}" method="GET">
                @csrf
                <div class="card text-center">
                    <img class="card-img-top" src="{{ $product->pure->images->first()->address ?? '#' }}" alt="test" width="100">
                    <div class="card-body">
                        <select name="product" style="visibility:hidden;">
                            <option value="{{$product->id}}"></option>
                        </select>
                        <h5 class="card-title"> {{$product->persian_title}} </h5>
                        <p class="card-text">{{ ' شناسه     محصول : ' . $product->pure->id }}</p>
                        <input type="submit" value="تنوع" class="btn btn-primary pl-5 pr-5 pt-2 pb-2">

                    </div>
                </div>
            </form>
        </div>

        @empty

        @endforelse


    </div>
</div>
@endsection