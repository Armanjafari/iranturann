@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9"> 
  @include('alerts.success')
  @include('alerts.errors')
  <form action="{{ route('edit.product',$pure->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="card mt-3 information-box">
      <div class="card-body text-right">
      <div class="d-flex justify-content-center">
          <h3>{{$pure->creator->market_name ?? 'ثبت شده توسط ادمین'}}</h3>
        </div>  
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="first-name">
              <label class="label">نام محصول</label>
              <input type="text" name="persian_title" value="{{ $pure->persian_title }}"
                class="form-control p-3 form-control-one" placeholder="نام محصول خود را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>نام انگلیسی محصول</label>
              <input type="text" name="title" value="{{ $pure->title }}" class="form-control p-3 form-control-one"
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
                        <option value=""></option>
                        @forelse ($categories as $category)
                        <option value="{{ $category->id }}" {{$category->id == $pure->category_id ? 'selected' : ''}}>{{$category->persian_name}}</option>
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
              <textarea id="" cols="50" name="description" value="" rows="4"
                class="form-control p-3 form-control-one over-flow-auto"
                placeholder="توضیحات اصلی محصول را نام ببرید">{{ $pure->description }}</textarea>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label>قیمت مرجع</label>
              <input type="text" name="price" value="{{ $pure->price }}" class="form-control p-3 form-control-one"
                placeholder="قیمت اصلی محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="first-name">
              <label> اسلاگ </label>
              <input type="text" name="slug" value="{{ $pure->slug }}" class="form-control p-3 form-control-one"
                placeholder="اسلاگ محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6 mt-4-5">
            <div class="first-name">
              <label> وزن </label>
              <input type="text" name="weight" value="{{ $pure->weight }}" class="form-control p-3 form-control-one"
                placeholder="وزن محصول را وارد نمایید">
            </div>
          </div>
          <div class="col-lg-6 mt-4-5">
            <div class="first-name">
              <label> کلمات کلیدی </label>
              <input type="text" name="keywords" value="{{ $pure->keywords }}" class="form-control p-3 form-control-one"
                placeholder="کلمات کلیدی محصول را وارد نمایید">
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
                        <option value=""></option>
                        @forelse ($brands as $brand)
                        <option value="{{ $brand->id }}" {{$brand->id == $pure->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
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
                        <option value=""></option>
                        @forelse ($options as $option)
                        <option value="{{ $option->id }}" {{$option->id == $pure->option_id ? 'selected' : ''}} >{{$option->name}}</option>
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
          <div class="col-lg-6 text-center mt-4">
            <label for="md">فعال</label>
              <input {{$pure->status == 1 ? 'checked' : ''}} type="radio" value="1" name="is_active" id="md">
              <label for="rd" class="mr-3 mt-4">غیرفعال</label>
              <input type="radio" {{$pure->status == 0 ? 'checked' : ''}} value="0" name="is_active" id="rd">
          </div>
          <div class="col-lg-6 mt-4"></div>   
        </div>
        <br>
        <div class="d-flex justify-content-center">
          <input type="submit" class="btn-Record-two mr-3" value="تایید">
        </div>
        </form>
        <div class="row">
        @forelse ($pure->images as $image)
        <div class="col-lg-3 mt-4">
            <img src="{{$image->address}}"  class="img-product-size3" alt="">
            </div>
        @empty
            
        @endforelse
          </div>
      </div>
 
</div>
</div>
@endsection