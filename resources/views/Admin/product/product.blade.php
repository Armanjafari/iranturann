@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">
  <div class="card-header add-product-box text-center">
    <span class="add-product"> ثبت کامل محصول </span>
  </div>
  @include('alerts.success')
  @include('alerts.errors')
  <form action="{{ route('create.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card mt-3 information-box">
      <div class="card-body text-right">
        <div class="row">
          <div class="col-lg-6">
            <div class="first-name">
              <label class="label">نام محصول</label>
              <input type="text" name="persian_title" value="{{ old('persian_title') }}" class="form-control p-3 form-control-one" placeholder="نام محصول خود را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>نام انگلیسی محصول</label>
              <input type="text" name="title" value="{{ old('title') }}"class="form-control p-3 form-control-one"
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
                      <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                        @forelse ($categories as $category)
                        <option value="{{ $category->id }}" >{{$category->persian_name}}</option>
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
              <label>توضیحات محصول</label>
              <textarea name="" id="" cols="50" name="description" value="{{ old('description') }}"  rows="4" class="form-control p-3 form-control-one over-flow-auto"
                placeholder="توضیحات اصلی محصول را نام ببرید"></textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>قیمت مرجع</label>
              <input type="text" name="price"  value="{{ old('price') }}"  class="form-control p-3 form-control-one" placeholder="قیمت اصلی محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label> اسلاگ </label>
              <input type="text" name="slug" value="{{ old('slug') }}"  class="form-control p-3 form-control-one" placeholder="اسلاگ محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6 mt-4-5">
            <div class="card form-control-one">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" style="font-size: 1.1em;">انتخاب برند محصول</label>
                      <select name="brand_id" class="form-control" id="exampleFormControlSelect1">
                        @forelse ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
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
                      <label for="exampleFormControlSelect1" style="font-size: 1.1em;"> انتخاب متغیر </label>
                      <select name="option_id" class="form-control" id="exampleFormControlSelect1">
                        @forelse ($options as $option)
                          <option value="{{ $option->id }}"> {{ $option->name }} </option>
                        @empty
                          
                        @endforelse
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4">
            <label for="files">آپلود عکس</label>
            <input id="files" value="{{ old('images') }}"  name="images[]" class="apload-img" type="file" multiple>
          </div>
        </div>
        <br>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn-Record-two mr-3" value="افزودن">
        </div>
      </div>
  </form>
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