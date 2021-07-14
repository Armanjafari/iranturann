@extends('Market.layout.master')
@section('content')
<main class="mt-3">
  <ul class="nav nav-pills mb-3 pr-2" id="pills-tab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
        aria-controls="pills-home" aria-selected="true">کل فروش ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
        aria-controls="pills-profile" aria-selected="false">ریز جزئیات</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
        aria-controls="pills-contact" aria-selected="false">تسویه حساب</a>
    </li>
  </ul>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active mt-5 text-center" id="pills-home" role="tabpanel"
      aria-labelledby="pills-home-tab">
      <div>
        <p> {{$user->market->market_name}} </p>
        <span class="Your-total-sales">میزان کل فروش :</span>
        <span>{{number_format($full_price)}} تومان</span>
      </div>
      <div class="mt-3">
        <span class="Your-total-sales">موجودی فروشنده :</span>
        <span>{{number_format(($paid + $user->market->wallet) ?? '0') }} تومان</span>
      </div>
      <div class="mt-3">
        <span class="Your-total-sales">حق عمل کل ایران توران :</span>
        <span> {{number_format($user->market->profit)}} تومان</span>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <span>با توجه به نوع دسته بندی مقدار کمسیون متغیر می باشد</span>
      <div class="col-lg-12 pr-0">
        <table class="table table-bordered table-striped text-center mt-4 table-seler table-seler1">
          <thead class="">
            <tr>
              <th scope="col">نام محصول</th>
              <th scope="col">درصد کمسیون</th>
              <th scope="col">فروش</th>
              <th scope="col">سهم شما</th>
              <th scope="col">سهم ما</th>
              <th scope="col">تاریخ</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($ord as $order)
            <tr>
              <td> <span class="ellipsis"> {{$order->pivot->full->product->pure->persian_title}} </span><br> <span class="mt-3">{{$order->pivot->full->colors->title}} </span> </td>
              <td><span class="ellipsis">{{$order->pivot->category_id}}</span></td>
              <td><span class="ellipsis">{{number_format($order->pivot->price)}}</span>  </td>
              <td><span class="ellipsis">{{number_format(($order->pivot->price) - (($order->pivot->category_id / 100) *  $order->pivot->price)  )}}</span></td>
              <td><span class="ellipsis">{{number_format(($order->pivot->category_id / 100) *  $order->pivot->price)}}</span></td>
              <td><span class="ellipsis">{{$order->created_at}}</span></td>
            </tr>
            @empty

            @endforelse


          </tbody>
        </table>
        <button type="button" class="btn btn-warning text-light" data-toggle="modal" data-target="#exampleModalCenter1">
          گرفتن خروجی
        </button>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">گرفتن خروجی ریز جزئیات مالی</h5>
                <div class="text-left">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <div class="modal-body text-right">
                <div>
                  <a href="#Checkout3" data-toggle="collapse" aria-expanded="false"
                    class="btn btn-success mr-2">تاریخ</a>
                  <a href="" class="btn btn-success">خروجی از کل</a>

                </div>
                <div class="collapse mt-3" id="Checkout3">
                  <input type="date" name="" id="">
                  <a href="" class="btn btn-info mt-3">تایید نهایی</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="text-right mr-3 mt-5">
        <span class="Your-total-sales">موجودی کیف پول</span>
        <span>{{number_format($user->market->wallet) ?? '0'}} تومان</span>
      </div>
      <div class="text-right mr-3 mt-2">
        <span class="Your-total-sales">کل پرداختی ها به شما</span>
        <span> {{number_format($user->market->financials->sum('price'))}} تومان</span>
      </div>
      <div class="col-lg-12">
        <table class="table table-bordered table-striped text-center mt-4 table-seler table-seler2">
          <thead class="">
            <tr>
              <th scope="col">مبلغ</th>
              <th scope="col">عکس ومشخصات فیش واریزی</th>
              <th scope="col">تاریخ وساعت</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              @forelse ($user->market->financials as $financial)
              <td> {{number_format($financial->price)}} تومان</td>
              <td><img src="{{$financial->image->address ?? '#'}}" class="fish" alt=""></td>
              <td class="Date"> {{$financial->updated_at}} </td>
            </tr>
            @empty
            <p>وجود ندارد</p>
            @endforelse




          </tbody>
        </table>
        <div>
          <button type="button" class="btn btn-warning text-light" data-toggle="modal"
            data-target="#exampleModalCenter2">
            گرفتن خروجی
          </button>
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">گرفتن خروجی ریز جزئیات مالی</h5>
                  <div class="text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                </div>
                <div class="modal-body text-right">
                  <div>
                    <a href="" class="btn btn-success">خروجی از کل</a>
                    <a href="#Checkout2" data-toggle="collapse" aria-expanded="false" class="btn btn-success mr-2">خروجی
                      از دسته بندی</a>
                  </div>
                  <div class="collapse mt-3" id="Checkout2">
                    <input type="text" class="form-control p-2" placeholder="دسته بندی را وارد کنید">
                    <a href="" class="btn btn-info mt-3">تایید نهایی</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="text-right mr-3 mt-5">
          <span class="Your-total-sales">شماره حساب شما</span>
          <span>2008952000300</span>
        </div>
        <div class="text-right mr-3 mt-3">
          <span class="Your-total-sales">شماره شبا شما</span>
          <span>IR21200000856152003</span>
        </div>
        <!-- Button trigger modal -->
        <div class="text-center mt-5">
          <button type="button" class="btn btn-warning text-light" data-toggle="modal"
            data-target="#exampleModalCenter">
            تسویه حساب
          </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">تسویه حساب</h5>
                <div class="text-left">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <div class="modal-body text-right">
                <div>
                  <a href="" class="btn btn-success">تسویه کامل</a>
                  <a href="#Checkout1" data-toggle="collapse" aria-expanded="false" class="btn btn-success mr-2">تسویه
                    اضطراری</a>
                </div>
                <div class="collapse mt-3" id="Checkout1">
                  <input type="text" class="form-control p-2" placeholder="مبلغ را وارد نمایید">
                  <a href="" class="btn btn-info mt-3">تایید نهایی</a>
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