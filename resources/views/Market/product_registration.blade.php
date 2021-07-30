@extends('Market.layout.master')
@section('content')
<main class="mt-0">
    <div class="container-fluid pr-0 pl-0">  
  <div class="col-lg-12 pr-0 pl-0">
          <div class="row">
  <div class="col-lg-4 mr-auto ml-auto"> 
  </div>         
                  <!-- Steps form -->
<div class="card w-100">
<div class="card-body mb-4 p-1">

      
<!-- Stepper -->
<div class="steps-form">
  <div class="steps-row setup-panel">
    
    <div class="steps-step">
      <a href="#step-10" type="button" class="btn btn-indigo btn-circle active-1" id="activeclasses1">1</a>
      <p>عکس محصول</p>
    </div>
    <div class="steps-step">
      <a href="#step-11" type="button" class="btn btn-default btn-circle" id="activeclasses" disabled="disabled">2</a>
      <p>نام ودسته بندی و وزن</p>
    </div>

  </div>
</div>

<form role="form" action="{{route('Prodcut.registraition')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
  <!-- First Step -->
  <div class="row setup-content" id="step-10">
    <div class="col-lg-12 text-right">
          
      <h5 class="font-weight-bold pl-0 my-4 text-right"><strong>مرحله اول</strong></h5>
      <div class="row">
              <div class=" text-right body-product" id="body-product">
                      <span class="caption-Guide">دیدن جزئیات یک محصول از زوایای مختلف و با کیفیت خوب امکان خرید آن را افزایش می دهد.</span><br>
                     
                          <div class="row">
                        <div class="file-input mt-3">
                          <input type="file"name="image" value="{{old('image')}}" id="imgInp" class="file" accept="image/*" capture="camera">
                          <label for="imgInp">آپلود عکس</label>
                          <img id="blah" alt="عکس اصلی">
                        </div>
                        <div class="file-input mt-3 mr-3">
                          <input type="file"name="images[]" value="{{old('images')}}" id="imgInp1" class="file" accept="image/*" multiple="multiple" multiple>
                          <label for="imgInp1">آپلود عکس</label>
                          <img id="blah1" alt="عکس گالری">
                        </div>
                    </div>
                      </div>
      </div>
      <button class="btn btn-indigo btn-rounded nextBtn float-left" type="button">بعدی</button>
</div>

  </div>
  <!-- Second Step -->
  <div class="row setup-content" id="step-11">
    
      <div class="col-lg-12 text-right">
      
              <h5 class="font-weight-bold pl-0 my-4 text-right"><strong>مرحله دوم</strong></h5>
              <div class="row">
                      <div id="name-and-categry" class=" text-right body-product">
                              <form action="">
                             <div class="first-name mt-4">
                              <label for="">نام محصول</label>
                              <input name="persian_title" value="{{old('persian_title')}}" type="text" class="form-control-one p-2 w-100" placeholder="نام محصول خود را وارد نمایید">
                             </div>
                             <div class="first-name mt-4">
                             <label for="">نام انگلیسی</label>
                             <input type="text" name="title" value="{{old('title')}}" class="form-control-one p-2 w-100" placeholder="نام انگلیسی محصول خود را وارد نمایید">
                      </div>
        
                       <div class="first-name mt-4">
                              <label for="">توضیحات</label>
                           <textarea name="description" id="" cols="5" rows="5" class="form-control-one p-2 w-100" placeholder="این فیلد اجباری است">{{old('description')}}</textarea>
                       </div>
                      <select name="category" id="" class="w-100 mt-3 border-warning border-style">
                        <option value='0'>انتخاب دسته بندی</option>          
                        @forelse ($categories as $category)
                        <option value='{{ $category->id }}'> {{ $category->persian_name }} </option>           
                        @empty
                            
                        @endforelse
                      </select>
                      <select name="brand" id="brand1" class="w-100 mt-3 border-warning border-style">
                        <option value='0' selected>انتخاب برند</option>
                        <option value="null">افزودن برند جدید</option>
                        @forelse ($brands as $brand)
                        <option value='{{ $brand->id }}'> {{ $brand->persian_name }} </option> 
                        @empty
                            
                        @endforelse
                  
                      </select>
                      <div id="price1" class=" text-right body-product">
                                <div class="first-name mt-4">
                                  <label for="">وزن محصول</label>
                                  <input type="text" value="{{old('weight')}}" name="weight" class="form-control-one p-2 w-100" placeholder="وزن محصول را با واحد گرم وارد کنید">
                                </div>
                            
                          </div>
                      </form>
                      <form action="{{ route('owner.create.brand') }}" method="POST">
                        @csrf
                        <div class="popup2">
                          <button type="button" class="close" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                                <p>ثبت برند جدید</p>
                             <div class="first-name mt-4">
                            <input name="brand_persian_title" value="{{old('brand_persian_title')}}" type="text" class="form-control-one p-2 w-100" placeholder="نام فارسی برند">
                                                 </div>
                              <div class="first-name mt-4">           
            <input type="text" name="brand_title" value="{{old('brand_title')}}" class="form-control-one p-2 w-100" placeholder="نام انگلیسی برند">
                                              </div>
                                              <div class="d-flex justify-content-center mt-3">
                                              <input type="submit" class="btn-Record" value="ثبت">
                                                </div>
                                     </div>
                               </form>
                          </div>
                                   </div>
                                   <button class="btn btn-indigo btn-rounded prevBtn float-right" type="button">قبلی</button>
                                   <button class="btn btn-default btn-rounded float-left" type="submit">ارسال</button>
      </div>
  </div>
 

  <!-- Third Step -->
  <div class="row setup-content" id="step-12">
    <div class="col-md-12">
      <h5 class="font-weight-bold pl-0 my-4 text-right"><strong>مرحله سوم</strong></h5>
      <button class="btn btn-indigo btn-rounded prevBtn float-right" type="button">قبلی</button>
      
    </div>
  </div>
</form>
</div>
</div>
<!-- Steps form -->
      {{-- <div class="img-bg justify-content-center align-items-start d-flex">
              <img src="assets/img/اژدها پیکر.png" alt="" style="width: 350px;height: 350px;">

      </div> --}}
</div>
    </div>
</div>
<br> <br>
@endsection
