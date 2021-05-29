@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">
    <div class="card-header text-center mt-1 add-product-box">
        <span class="add-product">محصولات فروشنده</span>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <form action="">
                        <div class="card text-center p-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultUnchecked"
                                    name="defaultExampleRadios">
                                <label class="custom-control-label" for="defaultUnchecked">فعال سازی فروشنده</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultChecked"
                                    name="defaultExampleRadios">
                                <label class="custom-control-label" for="defaultChecked"> غیر فعال سازی فروشنده</label>
                            </div>
                            <input type="submit" class="btn btn-info mt-3" value="ذخیره">
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="">
                        <div class="card text-center p-4">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultUnchecked2"
                                    name="defaultExampleRadios">
                                <label class="custom-control-label" for="defaultUnchecked2">فعال سازی کاربر</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="defaultChecked2"
                                    name="defaultExampleRadios">
                                <label class="custom-control-label" for="defaultChecked2">غیر فعال سازی کاربر</label>
                            </div>
                            <input type="submit" class="btn btn-info mt-3" value="ذخیره">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @forelse ($market->products as $product)
        <div class="col-lg-4 mt-3">
            <div class="card text-center">
                <img class="card-img-top"
                    src="https://dkstatics-public.digikala.com/digikala-products/325689.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"
                    alt="هپل">
                <div class="card-body">
                    <h5 class="card-title"> {{$product->pure->title}} </h5>
                    <p class="card-text"> {{$product->pure->price}} </p>
                    <form action="" method="get">
                        <input value="فعال" type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 btn-Record2">
                </div>
            </div>
        </div>
        </form>

        @empty

        @endforelse
    </div>
</div>
@endsection