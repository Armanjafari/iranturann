@extends('Admin.layout.master')
@section('content')



    <div class="col-lg-9">
        <div class="card p-3">
            <div class="row">
    <div class="col-lg-6 mt-5 mb-5">
                <div class="card form-control-one text-right">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" style="font-size: 1.1em;">لیست فروشنده</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>موسوی فروشگاه آماترا</option>
                        <option>جعفری شاورما شعله</option>
                        <option>هژبری لوازم التحریر شهریار</option>
                        <option>زلفیان فروشگاه ایران توران</option>
                      </select>
                  </div>
                      </div>
                  </div>
                  </div>
                </div>
</div>
<div class="col-lg-6 mt-5 mb-5">
                <div class="card form-control-one text-right">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" style="font-size: 1.1em;">لیست کالاها</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>لوازم برقی</option>
                        <option>کالای دیجیتال</option>
                        <option>لوازم آشپزخانه</option>
                        <option>مواد آرایشی</option>
                      </select>
                  </div>
                      </div>
                  </div>
                  </div>
                </div>
</div>
<div class="text-center">
<a href="" class="btn-info pr-5 pl-5 pt-2 pb-2 btn-info-add">ثبت</a>
</div>
</div>
</div>
</div>

@endsection