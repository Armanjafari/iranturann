@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <div class="card-header add-product-box text-center">
        <span class="add-product"> جزئیات </span>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <table class="table  text-center table-bordered table-bordered-1">
                <thead>
                    <tr>
                        <th class="table-bordered-1 user-name">کد سفارش</th>
                        <th class="table-bordered-1 user-name">شناسه خریدار</th>
                        <th class="table-bordered-1 user-name">نام خریدار</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-bordered-2">{{$payment->order_id}}</td>
                        <td class="table-bordered-2">{{$payment->order->user_id}}</td>
                        <td class="table-bordered-2">{{$payment->order->user->name}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12 mt-5">
            <table class="table  text-center table-bordered table-bordered-1">
                <thead>
                    <tr>
                        <th class="table-bordered-1 user-name">قیمت کل</th>
                        <th class="table-bordered-1 user-name">هزینه ارسال</th>
                        <th class="table-bordered-1 user-name">زمان پرداخت</th>
                        <th class="table-bordered-1 user-name">وضعیت پرداخت</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="table-bordered-2">{{number_format($payment->amount)}}تومان</td>
                        <td class="table-bordered-2">{{$post_price}}</td>
                        <td class="table-bordered-2">{{$payment->updated_at}}</td>
                        <td class="table-bordered-2">@lang('iranturan.' . $payment->status)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="content3 p-3">
                <div class="row"> 
                    @forelse ($payment->order->products as $product)
                    <div class="col-lg-4 text-right mt-3">
                        <a href="">
                            <img src="{{$product->product->pure->images->first()->address}}" alt="" class="h-100 w-100">
                        </a>
                    </div>

                    <div class="col-lg-8 text-right pr-0 mt-3">
                        <a href="" class="a-color">{{$product->product->pure->persian_title}}</a><br>
                        <div class="d-flex mt-3">

                            <span style="background-color:#123456;" class="dot mr-2 mt-2">
                            </span>
                            <a href="" class="a-color mr-2 mt-2">{{$product->colors->title}}</a>
                            <ul class="pagination">
                                <li class="page-item pagination1"><a class="page-link page-link1" href="#">{{$product->pivot->quantity}}</a></li>
                                <li class="page-item pagination1"><a class="page-link page-link1" href="#">تعداد</a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <div class="mt-2">
                                <img src="img/ice-cream (1).svg" alt="" class="mr-2">
                                <a href="" class="a-color mr-2">
                                    {{$product->product->market->market_name}}
                                </a>
                                <img src="img/Layer_1_1_ (1).svg" alt="" class="mr-4 mt-2">
                                <a href="" class="a-color mr-2">{{$product->waranty->name}}</a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="mt-3">
                                <span class="page-link1 mr-2">قیمت</span>
                                <a href="" class="a-color font-weight-bold">{{number_format($product->pivot->price)}}تومان</a>
                                <span class="page-link1 mr-2">قیمت کل</span>
                                <a href="" class="a-color font-weight-bold">{{number_format($product->pivot->price * $product->pivot->quantity)}}تومان</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    
                    @endforelse

                </div>
            </div>
        </div>
        <div class="col-lg-4 mt-5 text-center">
            <table class="table table-bordered table-bordered-1">
                <thead>
                    <tr>
                        <th class="table-bordered-1 font-size-14">کدپیگیری پست</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="">
                        <tr>
                            <td class="table-bordered-2">
                                <input type="text" value="12345678" class="form-control">
                            </td>
                        </tr>
                        <td class="table-bordered-1">
                            <input type="submit" value="ثبت" class="btn-Record1 pr-5 pl-5">
                        </td>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection