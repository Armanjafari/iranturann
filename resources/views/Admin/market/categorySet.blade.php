@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">

    <div class="card-header add-product-box text-center">
        <span class="add-product"> مدیریت درصد سود به ازای دسته بندی</span>
    </div>
    @include('alerts.success')
    @include('alerts.errors')
    <div class="card mt-3 text-right">
        <div class="card-body">
            <span> {{$market->market_name}} </span>
            <div class="row">
                @forelse ($categories as $category)
                <div class="col-lg-6 mt-5">
                <form action="{{ route('market.setprofit' ,['market' => $market->id , 'category' => $category->id]) }}" method="post">
                    @csrf
                    <div class="first-name">
                        <label class="label">  {{$category->persian_name}}  </label>
                        <input type="text" name="profit" value="{{$category->pivot->percent}}"
                            class="form-control p-3 form-control-one" placeholder=" درصد سود ">
                    </div>
                </div>
                    <div class="col-lg-6 mt-5">
                    <input class="btn-Record" type="submit" value="ثبت">
                </div>
            </form>
                @empty
                    
                @endforelse

            </div>
        </div>
    </div>
</div>
@endsection