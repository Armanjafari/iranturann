@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <div class="card-header add-product-box text-center">
        <span class="add-product"> وضعیت سفارشات </span>
    </div>
    <div class="row">
        @include('alerts.errors')
        @include('alerts.success')
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
                    @forelse ($payments as $payment)
                    <tr>
                        <td><a href="" class="btn btn-light">{{ $payment->order->id }}</a></td>
                        <td> {{$payment->order->user->name}} </td>
                        <td> {{number_format($payment->amount)}} تومان </td>
                        <td>
                            @for ($i = -1; $i <= 4; $i++)
                            @endfor
                            <form action="{{ route('order.change.status') }}" method="POST">
                                @csrf
                                <input style="display: none;" type="radio" value="{{$payment->id}}" name="payment" checked>
                                {{$i == $payment->status ? 'selected' : ''}}
                                <select name="status" class="form-select w-50" id="exampleFormControlSelect1">
                                    @for ($i = -1; $i <= 4; $i++) 
                                    {{-- // TODO check this --}}
                                 <option value="{{$i}}" {{$i == $payment->status ? 'selected' : ''}}>   @lang('iranturan.' .$i) </option>
                                @endfor
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