@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <div class="card-header add-product-box text-center">
        <span class="add-product">مدیریت مرکز خرید </span>
    </div>
    @include('alerts.success')
    @include('alerts.errors')
    <div class="card mt-3 ">
        <div class="card-body text-right">
            <form action="{{ route('create.shop') }}" enctype="multipart/form-data" method="POST">
                @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="first-name">
                        <label class="label">نام فروشگاه</label>
                        <input type="text" name="name" class="form-control p-3 form-control-one"
                            placeholder="نام فروشگاه خود را ثبت کنید">
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="first-name">
                        <label class="label">آدرس</label>
                        <input type="text" name="address" class="form-control p-3 form-control-one"
                            placeholder="آدرس خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="card form-control-one">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب
                                            استان</label>

                                        <select class="form-control" name="province" id="exampleFormControlSelect1">
                                            <option >فارس</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="card form-control-one">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب
                                            شهر</label>
                                        <select class="form-control" name="city" id="exampleFormControlSelect1">
                                            @forelse ($cities as $city)
                                            <option value="{{$city->id}}"> {{$city->name}} - {{$city->province->name}} </option>
                                            @empty
                                                
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5 ">
                    <div class="first-name">
                        <label> شماره مدیریت مرکز خرید </label>
                        <input type="text" name="phone_number" class="form-control p-3 form-control-one"
                            placeholder="شماره مدیریت مرکز خرید را وارد نمایید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5 ">
                    <label for="files" class="apload-img">آپلود عکس </label>
                    <input id="files" name="image" style="visibility:hidden;" type="file">
                </div>
                <div class="text-center mt-3 mb-4">
                    <input type="submit" class="btn-Record"value="ثبت">
                </div>
            </div>
        </form>

            <div class="col-lg-12 mt-3">
                <table class="table table-bordered table-striped text-center form-control-two">
                    <thead>
                        <tr>
                            <th>شماره مدیریت</th>
                            <th>اسم فروشگاه</th>
                            <th>آدرس</th>
                            <th>لینک عکس</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- start row table 2 -->
                        @forelse ($centers as $center)
                        <tr>
                            <td>{{ $center->phone_number }}</td>
                            <td>
                                {{$center->name}}
                            </td>
                            <td>
                                {{ $center->address}}
                            </td>
                            <td>
                                <img style="width: 100px;height: 100px;" src="{{$center->image->address ?? ''}}">
                            </td>
                            <td>
                                <a href="{{ route('show.shop.edit.form',$center->id) }}">ویرایش</a>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                        <!-- end row table 2 -->

                    </tbody>
                </table>
                @endsection