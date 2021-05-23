@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <div class="card-header add-product-box text-center">
        <span class="add-product"> لیست فروشندگان </span>
    </div>
    <div class="col-lg-12 mt-3">
        <table class="table table-bordered table-striped text-center form-control-two">
            <thead>
                <tr>
                    <th>کد</th>
                    <th>نام و نام خانوادگی</th>
                    <th>نام فروشگاه</th>
                    <th>آدرس</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($markets as $market)
                <tr>
                    <td>{{$market->user_id}}</td>
                    <td>{{$market->user->name}}</td>
                    <td>{{ $market->market_name }}</td>
                    <td>{{$market->user->shipings->work_address}}</td>

                    <td><a href="{{ route('admin.market.settings',$market->id) }}" class="btn-Record1">ویرایش</a></td>
                </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection