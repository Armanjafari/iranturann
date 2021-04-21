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
            <div class="row">
                <div class="col-lg-6">
                    <div class="first-name">
                        <label class="label">نام ونام خانوادگی فروشنده</label>
                        <input type="text" name="name" class="form-control p-3 form-control-one"
                            placeholder="نام و نام خانوادگی خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="first-name">
                        <label>نام فروشگاه </label>
                        <input type="text" name="market_name" class="form-control p-3 form-control-one"
                            placeholder="اسم فروشگاه خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="card form-control-one">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب استان و
                                            شهر </label>
                                        <select name="city_id" class="form-control " id="exampleFormControlSelect1">
                                            <option>فارس - گراش </option>
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
                        <input name="address" type="text" class="form-control p-3 form-control-one"
                            placeholder=" آدرس خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="first-name">
                        <label class="label">کدپستی</label>
                        <input type="text" name="postal_code" class="form-control p-3 form-control-one"
                            placeholder=" کد پستی خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="first-name">
                        <label class="label"> آدرس محل کار</label>
                        <input type="text" name="work_address" class="form-control p-3 form-control-one"
                            placeholder=" آدرس محل کار خود را وارد کنید ">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="first-name">
                        <label class="label">تلفن ثابت</label>
                        <input type="text" name="work_phone" class="form-control p-3 form-control-one"
                            placeholder=" تلفن ثابت خود را وارد کنید">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="first-name">
                        <label class="label"> تلفن همراه</label>
                        <input type="text"  class="form-control p-3 form-control-one"
                            placeholder=" تلفن همراه خود را وارد کنید ">
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="first-name">
                        <label class="label"> شماره حساب</label>
                        <input type="text" class="form-control p-3 form-control-one"
                            placeholder=" شماره حساب خود را وارد کنید ">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="first-name">
                        <label class="label">شماره شبا</label>
                        <input type="text" class="form-control p-3 form-control-one"
                            placeholder=" شماره شبا خود را وارد کنید">
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
                                        <select class="form-control " id="exampleFormControlSelect1">
                                            <option>عباس رنجبر</option>
                                            <option>جواد هژبری </option>
                                            <option>آرمان جعفری</option>
                                            <option>سید مهدی موسوی</option>
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
                                        <select class="form-control " id="exampleFormControlSelect1">
                                            <option>مجتمع نگین</option>
                                            <option>مجتمع هلال </option>
                                            <option>بازار بزرگ لارستان</option>
                                            <option>بازار امام خمینی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4-5">
                    <div class="first-name">
                        <label for="files" >آپلود لوگو</label>
                        <input id="files" class="apload-img" type="file">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="first-name">
                        <label for="files" >آپلود مدارک رسمی</label>
                        <input id="files" class="apload-img" type="file">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="first-name">
                        <label for="files" >آپلود  عکس مغازه </label>

                        <input id="files" class="apload-img" type="file">
                    </div>
                </div>
            </div>
            <br>
            <div class="text-center mt-4 mb-3">
                <a href="" class="btn-Record">ثبت</a>
            </div>
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