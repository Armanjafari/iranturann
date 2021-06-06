@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <div class="card-header add-product-box text-center">
        <span class="add-product"> وضعیت سفارشات </span>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-3">
            <table class="table table-bordered table-striped text-center form-control-two">
                <thead>
                    <tr>
                        <th>کد سفارش</th>
                        <th> مشتری </th>
                        <th>جمع سفارشات</th>
                        <th>وضعیت سفارشات</th>
                        <th>جزئیات </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                    <tr>
                        <td><a href="" class="btn btn-light">{{ $order->id }}</a></td>
                        <td> {{$order->user->name}} </td>
                        <td> {{number_format($order->payment->amount)}} تومان </td>
                        <td>
                            <form action="">
                                <select name="status" class="form-select w-50" id="exampleFormControlSelect1">
                                    <option value="0">لغو شده</option>
                                    <option value="1">پرداخت شده</option>
                                    <option value="2">تایید فروشنده</option>
                                    <option value="3"> تایید و تست نماینده </option>
                                    <option value="4">ارسال شده</option>
                                    <option value="-1">مرجوع شده</option>
                                </select>
                                <input type="submit" value="ثبت" class="btn btn-info mt-3 w-50">
                            </form>
                        </td>
                        <td><a href="" class="btn btn-light">جزئیات</a></td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection