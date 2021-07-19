@extends('layout.master')
@section('content')
<main style="margin-top: 7rem">
    <div class="row">
        @include('user.mini_nav')
        <div class="col-lg-9">
            <div class="text-right mt-3 mt-sm-0">
                <span class="discount discount2">تاریخچه سفارشات</span>
            </div>
            <div class="nav nav-tabs nav-fill mt-5" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                    aria-controls="nav-home" aria-selected="true"> پرداخت شده 
                    {{-- <div
                        class="o__box d-inline-block mr-3">
                        <span>2</span>
                    </div> --}}
                </a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                    aria-controls="nav-profile" aria-selected="false"> در حال پردازش
                    {{-- <div
                        class="o__box d-inline-block mr-3">
                        <span>3</span>
                    </div> --}}
                </a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                    aria-controls="nav-contact" aria-selected="false">تحویل شده
                    {{-- <div class="o__box d-inline-block mr-3">
                        <span>6</span>
                    </div> --}}
                </a>
                <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact2" role="tab"
                    aria-controls="nav-contact2" aria-selected="false">لغو شده
                    {{-- <div class="o__box d-inline-block mr-3"> --}}
                        {{-- <span>8</span> --}}
                    {{-- </div> --}}
                </a>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="col-lg-12">
                        <div class="c-profile-order__list-item mt-3 p-3 text-right">
                            @forelse ($orders as $order)
                            @if ($order->payment->status == 1)
                            <span>{{$order->created_at}}</span>
                            <span class="mr-3">it-{{$order->id}}</span>
                            <span class="mr-3">@lang('iranturan.'.$order->payment->status)</span>
                            <a href="{{route('user.orders.details.form',$order->id)}}" class="float-left o-link--has-arrow">مشاهده سفارش</a>
                            <div class="mt-3">
                                <span class="c-profile-order__list-item-detail-title">مبلغ کل :</span>
                                <span>{{number_format($order->payment->amount)}}تومان</span>
                            </div>
                       
                            <div class="row mt-3">
                                <a href="">
                                    <figure>
                                        @forelse ($order->products as $product)
                                        
                                        <img src="{{$product->product->pure->images->first()->address}}" alt="" class="c-profile-order__list-item-parcel-product">
                                    @empty
                                        
                                    @endforelse
                                        
                                    </figure>
                                </a>
                            </div>
                            <hr>
                            @endif

                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="col-lg-12">
                        <div class="c-profile-order__list-item mt-3 p-3 text-right">
                            @forelse ($orders as $order)
                            @if ($order->payment->status > 1 && $order->payment->status < 4 )
                            <span>{{$order->created_at}}</span>
                            <span class="mr-3">it-{{$order->id}}</span>
                            <span class="mr-3">@lang('iranturan.'.$order->payment->status)</span>
                            <a href="{{route('user.orders.details.form',$order->id)}}" class="float-left o-link--has-arrow">مشاهده سفارش</a>
                            <div class="mt-3">
                                <span class="c-profile-order__list-item-detail-title">مبلغ کل :</span>
                                <span>{{number_format($order->payment->amount)}}تومان</span>
                            </div>
                       
                            <div class="row mt-3">
                                <a href="">
                                    <figure>
                                        @forelse ($order->products as $product)
                                        
                                        <img src="{{$product->product->pure->images->first()->address}}" alt="" class="c-profile-order__list-item-parcel-product">
                                    @empty
                                        
                                    @endforelse
                                        
                                    </figure>
                                </a>
                            </div>
                            <hr>
                            @endif

                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="col-lg-12">
                        <div class="c-profile-order__list-item mt-3 p-3 text-right">
                            @forelse ($orders as $order)
                            @if ($order->payment->status == 4)
                            <span>{{$order->created_at}}</span>
                            <span class="mr-3">it-{{$order->id}}</span>
                            <span class="mr-3">@lang('iranturan.'.$order->payment->status)</span>
                            <a href="{{route('user.orders.details.form',$order->id)}}" class="float-left o-link--has-arrow">مشاهده سفارش</a>
                            <div class="mt-3">
                                <span class="c-profile-order__list-item-detail-title">مبلغ کل :</span>
                                <span>{{number_format($order->payment->amount)}}تومان</span>
                            </div>
                       
                            <div class="row mt-3">
                                <a href="">
                                    <figure>
                                        @forelse ($order->products as $product)
                                        
                                        <img src="{{$product->product->pure->images->first()->address}}" alt="" class="c-profile-order__list-item-parcel-product">
                                    @empty
                                        
                                    @endforelse
                                        
                                    </figure>
                                </a>
                            </div>
                            <hr>
                            @endif

                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                    <div class="col-lg-12">
                        <div class="c-profile-order__list-item mt-3 p-3 text-right">
                            @forelse ($orders as $order)
                            @if ($order->payment->status == 4)
                            <span>{{$order->created_at}}</span>
                            <span class="mr-3">it-{{$order->id}}</span>
                            <span class="mr-3">@lang('iranturan.'.$order->payment->status)</span>
                            <a href="{{route('user.orders.details.form',$order->id)}}" class="float-left o-link--has-arrow">مشاهده سفارش</a>
                            <div class="mt-3">
                                <span class="c-profile-order__list-item-detail-title">مبلغ کل :</span>
                                <span>{{number_format($order->payment->amount)}}تومان</span>
                            </div>
                       
                            <div class="row mt-3">
                                <a href="">
                                    <figure>
                                        @forelse ($order->products as $product)
                                        
                                        <img src="{{$product->product->pure->images->first()->address}}" alt="" class="c-profile-order__list-item-parcel-product">
                                    @empty
                                        
                                    @endforelse
                                        
                                    </figure>
                                </a>
                            </div>
                            <hr>
                            @endif

                            @empty

                            @endforelse
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