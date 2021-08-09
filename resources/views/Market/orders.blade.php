@extends('Market.layout.master')
@section('content')
<main class="mt-3">
    <div class="col-lg-12 pr-3">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link pr-2 pl-2 table-seler4  active" id="pills-contact-tab1" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1" aria-selected="true">پرداخت شده</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pr-2 pl-2 table-seler4" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">آماده ارسال</a>
        </li>
        <li class="nav-item">
          <a class="nav-link pr-2 pl-2 table-seler4" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">مرجوع شده</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  pr-2 pl-2 table-seler4" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">کل سفارشات</a>
        </li>
      </ul>
      <div class="col-lg-12 d-flex justify-content-center">
        <input type="search" name="" id="myInput" placeholder="سرچ کن" class="p-1 form-control serch-box">
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show  mt-5 text-center" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <table class="table table-bordered table-striped text-center mt-5 table-seler table-seler3">
        <thead class="">
          <tr>
            <th class=" table-seller5">شماره سفارش</th>
            <th class=" table-seller5">محصول</th>
            <th class=" table-seller5">تعداد</th>
            <th class=" table-seller5">قیمت</th>
            <th class=" table-seller5">وضعیت</th>
          </tr>
        </thead>
        <tbody id="myTable">
          @forelse ($orders as $order)
          @if ($order->payment->status >= 1)
          <tr>
            <td class="td-form">{{$order->id}}</td>
            <td class="td-form"> {{$order->products->first()->product->pure->persian_title}} <br> {{$order->products->first()->colors->title}}</td>
            <td class="td-form">{{$order->pivot->quantity}}</td>
            <td class="td-form">{{number_format($order->pivot->price * $order->pivot->quantity)}}</td>
            <td class="td-form"> @lang('iranturan.'. $order->payment->status) </td>
          </tr>
            
          @endif
          @empty
            <span>سفارش وجود ندارد</span>
          @endforelse
         
        </tbody>
      </table>
      </div>
      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <table class="table table-bordered table-striped text-center mt-5 table-seler table-seler3">
          <thead class="">
            <tr>
              <th class=" table-seller5">شماره سفارش</th>
              <th class=" table-seller5">محصول</th>
              <th class=" table-seller5">تعداد</th>
              <th class=" table-seller5">قیمت</th>
              <th class=" table-seller5">وضعیت</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @forelse ($orders as $order)
            @if ($order->payment->status == 2)
            <tr>
              <td class="td-form">{{$order->id}}</td>
              <td class="td-form"> {{$order->products->first()->product->pure->persian_title}} <br> {{$order->products->first()->colors->title}} </td>
              <td class="td-form">{{$order->pivot->quantity}}</td>
              <td class="td-form">{{number_format($order->pivot->price * $order->pivot->quantity)}}</td>
              <td class="td-form"> آماده ارسال </td>
            </tr>
              
            @endif
            @empty
              <span>سفارش وجود ندارد</span>
            @endforelse
          </tbody>
        </table>
      </div>
      <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <table class="table table-bordered table-striped text-center mt-5 table-seler table-seler3">
        <thead class="">
          <tr>
            <th class=" table-seller5">شماره سفارش</th>
            <th class=" table-seller5">محصول</th>
            <th class=" table-seller5">تعداد</th>
            <th class=" table-seller5">قیمت</th>
            <th class=" table-seller5">وضعیت</th>
          </tr>
        </thead>
        <tbody id="myTable">
          @forelse ($orders as $order)
          @if ($order->payment->status == -10)
          <tr>
            <td class="td-form">{{$order->id}}</td>
            <td class="td-form"> {{$order->products->first()->product->pure->persian_title}} <br> {{$order->products->first()->colors->title}}</td>
            <td class="td-form">{{$order->pivot->quantity}}</td>
            <td class="td-form">{{number_format($order->pivot->price * $order->pivot->quantity)}}</td>
            <td class="td-form"> {{ $order->payment->status }} </td>
          </tr>
            
          @endif
          @empty
            <span>سفارش وجود ندارد</span>
          @endforelse
        </tbody>
      </table>
      </div>
      <div class="tab-pane fade active" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
      <table class="table table-bordered table-striped text-center mt-5 table-seler table-seler3">
          <thead class="">
            <tr>
              <th class=" table-seller5">شماره سفارش</th>
              <th class=" table-seller5">محصول</th>
              <th class=" table-seller5">تعداد</th>
              <th class=" table-seller5">قیمت</th>
              <th class=" table-seller5">وضعیت</th>
            </tr>
          </thead>
          <tbody id="myTable">
            @forelse ($orders as $order)
            @if ($order->payment->status == 1)
            <tr>
              <td class="td-form">{{$order->id}}</td>
              <td class="td-form"> {{$order->products->first()->product->pure->persian_title}} <br> {{$order->products->first()->colors->title}}</td>
              <td class="td-form">{{$order->pivot->quantity}}</td>
              <td class="td-form">{{number_format($order->pivot->price * $order->pivot->quantity)}}</td>
              <td class="td-form"> پرداخت شده </td>
            </tr>
            @endif
            @empty
              <span>سفارش وجود ندارد</span>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
      </div>
    
      <!-- Modal -->
      <div class="modal fade text-right" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">اشتراک گذاری از طریق</h5>
              <div class="mr-auto">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
            <div class="modal-body">
            <a href="https://wa.me/?text=urlencodedtext"><img src="assets/img/svg element/icons8-whatsapp.svg" class="ml-1" alt=""> واتساپ</a>
            <a href="" class="mr-3"><img src="assets/img/svg element/telegram.svg" alt=""> تلگرام</a>
            </div>
         
          </div>
        </div>
      </div>
@endsection