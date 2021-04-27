@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <!-- Title Page -->
    <div class="card-header add-product-box text-center">
        <span class="add-product"> مدیریت فروشندگان </span>
    </div>
    @include('alerts.success')
    @include('alerts.errors')
    <!-- End Title Page -->
    <!-- Start Register Form Saller -->
    <div class="card mt-3 ">
        <div class="card-body text-right">
            <form action="{{ route('create.market') }}" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="first-name">
                            <label class="label">نام ونام خانوادگی فروشنده</label>
                            <input type="text" value="{{ old('name') }}" name="name"
                                class="form-control p-3 form-control-one"
                                placeholder="نام و نام خانوادگی خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="first-name">
                            <label>نام فروشگاه </label>
                            <input type="text" name="market_name" value="{{ old('market_name') }}"
                                class="form-control p-3 form-control-one" placeholder="اسم فروشگاه خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>نام انگلیسی فروشگاه </label>
                            <input type="text" name="english_name" value="{{ old('english_name') }}"
                                class="form-control p-3 form-control-one" placeholder="اسم فروشگاه خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label> ایدی اینستاگرام </label>
                            <input type="text" name="instagram" value="{{ old('instagram') }}"
                                class="form-control p-3 form-control-one" placeholder="اسم فروشگاه خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="card form-control-one">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب
                                                استان و
                                                شهر </label>
                                            <select name="city_id" class="form-control " id="exampleFormControlSelect1">
                                                @forelse ($cities as $city)
                                                <option value="{{$city->id}}">
                                                    {{$city->name .' - '. $city->province->name}} </option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label class="label">آدرس</label>
                            <input name="address" type="text" value="{{ old('address') }}"
                                class="form-control p-3 form-control-one" placeholder=" آدرس خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="first-name">
                            <label class="label">کدپستی</label>
                            <input type="text" name="postal_code" value="{{ old('postal_code') }}"
                                class="form-control p-3 form-control-one" placeholder=" کد پستی خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label class="label"> آدرس محل کار</label>
                            <input type="text" name="work_address" value="{{ old('work_address') }}"
                                class="form-control p-3 form-control-one" placeholder=" آدرس محل کار خود را وارد کنید ">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label class="label">تلفن ثابت</label>
                            <input type="text" name="work_phone" value="{{ old('work_phone') }}"
                                class="form-control p-3 form-control-one" placeholder=" تلفن ثابت خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label class="label"> تلفن همراه</label>
                            <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control p-3 form-control-one" placeholder=" تلفن همراه خود را وارد کنید ">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label class="label"> شماره حساب</label>
                            <input type="text" name="bank_number" value="{{ old('bank_number') }}"
                                class="form-control p-3 form-control-one" placeholder=" شماره حساب خود را وارد کنید ">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="first-name">
                            <label class="label">شماره شبا</label>
                            <input type="text" name="shaba_number" value="{{ old('shaba_number') }}"
                                class="form-control p-3 form-control-one" placeholder=" شماره شبا خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="card form-control-one">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب
                                                نماینده</label>
                                            <select name="agent_id" class="form-control "
                                                id="exampleFormControlSelect1">
                                                {{-- // TODO fix agent name --}}
                                                @forelse ($agents as $agent)
                                                <option value="{{$agent->id}}"> {{$agent->name}} </option>

                                                @empty

                                                @endforelse
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
                                            <label for="exampleFormControlSelect1" style="font-size: 1.1em;">مرکز
                                                فروش</label>
                                            <select name="center_id" class="form-control "
                                                id="exampleFormControlSelect1">
                                                @forelse ($centers as $center)
                                                <option value="{{$center->id}}"> {{$center->name}} </option>
                                                @empty

                                                @endforelse
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
                                            <label for="exampleFormControlSelect1" style="font-size: 1.1em;"> نوع فروشنده </label>
                                            <select name="center_id" class="form-control "
                                                id="exampleFormControlSelect1">
                                            <option value="0"> فروشنده عادی </option>
                                            <option value="1"> فروشنده شبکه اجتماعی </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label for="files">آپلود لوگو</label>
                            <input name="logo" value="{{ old('logo') }}" id="files" class="apload-img" type="file">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="first-name">
                            <label for="files">آپلود مدارک رسمی</label>
                            <input name="image" value="{{ old('image') }}" id="files" class="apload-img" type="file">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="first-name">
                            <label for="files">آپلود عکس مغازه </label>

                            <input name="market_picture" value="{{ old('market_picture') }}" id="files"
                                class="apload-img" type="file">
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center mt-4 mb-3">
                    <input type="submit" class="btn-Record" value="ثبت">
                </div>
            </form>
            <!-- End Saller Form -->
            <!-- Start Table  -->
            <div class="col-lg-12 mt-5">
                <table class="table table-bordered table-striped text-center form-control-two">
                    <thead>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>شماره موبایل</th>
                            <th>استان و شهر</th>
                            <th>مرکز فروش</th>
                            <th>نماینده</th>
                            <th>ویرایش</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>انسیه سوری</td>
                            <td>09369704408</td>
                            <td>بازاربزرگ لارستان</td>
                            <td>لار،فارس</td>
                            <td>عباس رنجبر</td>
                            <td><a href="#">ویرایش</a></td>
                            <td><a href="#">حذف</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Table -->
        </div>
    </div>
</div>
@endsection