@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">
  <div class="card-header add-product-box text-center">
    <span class="add-product"> ثبت کامل محصول </span>
  </div>
  @include('alerts.success')
  @include('alerts.errors')
  <div class="card mt-3 information-box">
    <div class="card-body text-right">
      <div class="row">
        <div class="col-lg-6">
          <div class="first-name">
            <label class="label">نام محصول</label>
            <input type="text" class="form-control p-3 form-control-one" placeholder="نام محصول خود را وارد نمایید">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="first-name">
            <label>نام انگلیسی محصول</label>
            <input type="text" class="form-control p-3 form-control-one"
              placeholder="نام انگلیسی محصول خود را وارد نمایید">
          </div>
        </div>
        <div class="col-lg-6 mt-4-5">
          <div class="card form-control-one">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-size: 1.1em;">دسته بندی محصول</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>دیجیتال</option>
                      <option>لوازم خانگی</option>
                      <option>پوشاک</option>
                      <option>مواد غذایی</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4-5">
          <div class="first-name">
            <label>توضیحات محصول</label>
            <textarea name="" id="" cols="50" rows="4" class="form-control p-3 form-control-one over-flow-auto"
              placeholder="توضیحات اصلی محصول را نام ببرید"></textarea>
          </div>
        </div>

        <div class="col-lg-3 mt-4">
          <label for="files" class="apload-img">آپلود عکس</label>
          <input id="files" style="visibility:hidden;" type="file">
        </div>
        <div class="col-lg-3 mt-4">
          <label for="files" class="apload-img">+</label>
          <input id="files" style="visibility:hidden;" type="file">
        </div>
        <div class="col-lg-6 mt-4-5">
          <div class="first-name">
            <label class="label">کلمات کلیدی </label>
            <input type="text" class="form-control p-3 form-control-one"
              placeholder=" کلمات کلیدی محصول خود را وارد کنید">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card form-control-one">
            <p class="Product-category" style="font-size: 1.1em;">اصل بودن یا غیر اصل بودن محصول را مشخص کنید</p>
            <div class="card-body">
              <form action="">
                <input type="radio" name="gender" id="Product-group1">
                <label for="Product-group1">اصل بودن</label><br>
                <input type="radio" name="gender" id="Product-group2">
                <label for="Product-group2">غیر اصل بودن</label>

              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="first-name">
            <label>قیمت مرجع</label>
            <input type="text" class="form-control p-3 form-control-one" placeholder="قیمت اصلی محصول را وارد نمایید">
          </div>
        </div>
        <div class="col-lg-6 mt-4-5">
          <div class="card form-control-one">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب برند محصول</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>سامسونگ</option>
                      <option>ال جی</option>
                      <option>شیامی</option>
                      <option>هواوی</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <br>
      <div class="d-flex justify-content-center">


        <a href="" class="btn-Record-two mr-3">افزودن</a>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-12 mt-3">
  <div class="card border-dark-d mb-3">
    <div class="row">
      <div class="col-lg-3 mt-5">
        <div class="dropdown dropdown-city">
          <button class="btn  dropdown-toggle dropdown-city-button" type="button" id="dropdown_coins"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            گارانتی محصول خود را انتخاب کنید
          </button>
          <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
            <form class="px-4 py-2">
            </form>
            <div id="menuItems" class="text-right">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 mt-3">
        <div class="card form-control-one p-3">
          <div class="row">
            <div class="col-lg-3 text-right">
              <div class="form-group">
                <div class="select">
                  <label for="exampleFormControlSelect1">رنگ محصول خود را انتخاب کنید</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>قرمز</option>
                    <option>آبی</option>
                    <option>زرد</option>
                    <option>طوسی</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-3 align-items-end d-flex mb-3">
              <input type="text" class="form-control" placeholder="قیمت">
            </div>
            <div class="col-lg-3 align-items-end d-flex mb-3">
              <input type="text" class="form-control" placeholder="موجودی">
            </div>
            <div class="col-lg-3 d-flex justify-content-center align-items-center mt-3">
              <input type="radio" id="active">
              <label for="active" class="mt-2 mr-2" name="gender">فعال</label>
              <input type="radio" id="no-active" class="mr-3">
              <label for="no-active" class="mt-2 mr-2" name="gender">غیرفعال</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5 mb-5">
      <a href="" class="btn-Record">ثبت</a>
    </div>
  </div>
  @endsection