@extends('layout.master')
@section('content')
<main style="margin-top: 7rem;">
    <div class="row">
        <div class="col-lg-9">
            <div class="text-right">
                <span class="discount discount2">جزئیات سفارش</span>
            </div>
            <div class="col-lg-12 mt-3">
                <div class="card font-size-mobile">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 pr-0 pl-0 text-right">
                                <span class="Transferee">تحویل گیرنده:</span>
                                <span> {{$user->name}} </span>
                                <div class="mr-5 d-inline-block">
                                    <span class="Transferee">شماره تماس:</span>
                                    <span>{{$user->phone_number}}</span>
                                </div>
                                <div class="mr-5 d-inline-block">
                                    <span class="Transferee">کدپیگیری پست:</span>
                                    <span>{{$order->payment->trackingCode ?? 'وارد نشده'}}</span>
                                </div>
                                <br><br>
                                <span class="Transferee">ارسال به:</span>
                                <span>{{$user->shipings->address}}</span>

                                <div class="mr-5 d-inline-block">
                                    <span class="Transferee">مبلغ کل:</span>
                                    <span>{{number_format($order->payment->amount)}}تومان</span>

                                </div>
                                <div class="mr-5 d-inline-block">
                                    <span class="Transferee">وضعیت:</span>
                                    <span>@lang('iranturan.'.$order->payment->status)</span>
                                </div>
                                <hr>
                                <span class="Transferee">تاریخ تحویل:</span>
                                <span>{{$order->payment->created_at->addDays(3)->format('m/d/Y')}}</span>
                                <div class="mr-5 d-inline-block">
                                    <span class="Transferee">هزینه ارسال:</span>
                                    <span>{{number_format($post_price)}}</span>
                                </div>
                                <div class="col-lg-12 mt-5 pr-0 pl-0">
                                    <span>{{$order->payment->created_at->addDays(3)->format('m/d/Y')}}</span>
                                    <span class="mr-3">it-{{$order->id}}</span>
                                    @forelse ($order->products as $product)
                                    <div class="c-profile-order__list-item mt-3 p-3 text-right">

                                        <div class="row mt-3">
                                            <a href="">
                                                <figure>
                                                    <img src="{{$product->product->pure->images->first()->address}}"
                                                        alt="" class="c-profile-order__list-item-parcel-product1">
                                                </figure>
                                            </a>
                                            <div class="mt-3 mr-3">
                                                <a href="">{{$product->product->pure->persian_title}}</a>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="mt-3">
                                                <span class="c-profile-order__list-item-detail-title">مبلغ واحد :</span>
                                                <span>{{number_format($product->pivot->price)}}تومان</span>
                                            </div>
                                            <div class="mt-3 mr-3">
                                                <span class="c-profile-order__list-item-detail-title">
                                                    تعداد:
                                                </span>
                                                <span>
                                                    {{$product->pivot->quantity}}
                                                </span>
                                            </div>
                                            <div class="mt-3 mr-3">
                                                <span class="c-profile-order__list-item-detail-title">مبلغ کل :</span>
                                                <span>{{number_format($product->pivot->price * $product->pivot->quantity)}}تومان</span>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <span class="garant"><img src="{{asset('assets/img/svg element/گارانتی.svg')}}"
                                                    class="seller-all-img-icon ml-2">{{$product->waranty->first()->name}}</span>
                                            <span class="shopping8 mr-3"><img src="{{asset('assets/img/svg element/فروشنده.svg')}}"
                                                    class="seller-all-img-icon ml-2"> فروشگاه : {{$product->product->market->market_name}} </span>
                                        </div>
                                        <hr>
                                    </div>
                                    @empty
                                        
                                    @endforelse
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3 text-center">
                            <a href="" class="btn btn-success">مشاهده فاکتور</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
</main>
@endsection