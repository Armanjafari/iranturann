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
              <input type="text" name="persian_title" value="{{ old('persian_title') }}"
                class="form-control p-3 form-control-one" placeholder="نام محصول خود را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>نام انگلیسی محصول</label>
              <input type="text" name="title" value="{{ old('title') }}" class="form-control p-3 form-control-one"
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
                        <option value="{{ $category->id }}">{{$category->persian_name}}</option>
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
              <textarea id="" cols="50" name="description" value="{{ old('description') }}" rows="4"
                class="form-control p-3 form-control-one over-flow-auto"
                placeholder="توضیحات اصلی محصول را نام ببرید"></textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>قیمت مرجع</label>
              <input type="text" name="price" value="{{ old('price') }}" class="form-control p-3 form-control-one"
                placeholder="قیمت اصلی محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label> اسلاگ </label>
              <input type="text" name="slug" value="{{ old('slug') }}" class="form-control p-3 form-control-one"
                placeholder="اسلاگ محصول را وارد نمایید">
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
            <input id="files" value="{{ old('images') }}" name="images[]" class="apload-img" type="file" multiple>
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
<div class="row">
        <div class="col-lg-3 text-center mt-2">
    
        <img src="{{asset('assets/admin/img/0f4fa28ac647dda271460bdcf9c4dee30b12082c_1622025774.jpg')}}"  class="img-product-size3" alt="">
        </div>
        <div class="col-lg-3  text-center mt-5">
             <div class="form-control-one p-2">
                 <caption>
                     <span>آبمیوه گیر پاناسونیک مدلng300</span>
                 </caption>
             </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
        <div class="mt-2">
                <a href="" class="form-control-one pr-5 pl-5 pt-1 pb-1">ویرایش</a>
             </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
                <div class="mt-2">
                <a href="" class="form-control-one pr-5 pl-5 pt-1 pb-1">حذف</a>
                </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
        <form action="">
                <button type="submit" class="btn-wait">در حال انتظار</button>
                </form>
        </div>
        <div class="col-lg-3 text-center mt-2">
        
        <img src="{{asset('assets/admin/img/32c7acc98efaab5825e4a7d6015b789a8c39f06e_1611566304.jpg')}}"  class="img-product-size3" alt="">
        </div>
        <div class="col-lg-3  text-center mt-5">
             <div class="form-control-one p-2">
                 <caption>
                     <span>اتو</span>
                 </caption>
             </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
        <div class="mt-2">
                <a href="" class="form-control-one pr-5 pl-5 pt-1 pb-1">ویرایش</a>
                </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
        <div class="mt-2">
                <a href="" class="form-control-one pr-5 pl-5 pt-1 pb-1">حذف</a>
        </div>
        </div>
        <div class="col-lg-2  text-center mt-5">
        <form action="">
                <button type="submit" class="btn-Record">تایید</button>
                </form>
        </div>
        </div>
@endsection