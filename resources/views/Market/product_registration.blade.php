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

<form role="form" action="{{route('Prodcut.registraition')}}" method="post" enctype="multipart/form-data">
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
                          <input type="file"name="images[]" id="imgInp" class="file" multiple>
                          <label for="imgInp">آپلود عکس</label>
                          <img id="blah" alt="محل آپلود شدن عکس">
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
                              <input name="persian_title" type="text" class="form-control-one p-2 w-100" placeholder="نام محصول خود را وارد نمایید">
                             </div>
                             <div class="first-name mt-4">
                             <label for="">نام انگلیسی</label>
                             <input type="text" name="title" class="form-control-one p-2 w-100" placeholder="نام انگلیسی محصول خود را وارد نمایید">
                      </div>
                    
                       <div class="first-name mt-4">
                              <label for="">توضیحات</label>
                           <textarea name="description" id="" cols="5" rows="5" class="form-control-one p-2 w-100" placeholder="این فیلد اجباری است"></textarea>
                       </div>
                      <select name="category" id="" class="w-100 mt-3 border-warning border-style">
                        <option value='0'>انتخاب دسته بندی</option>          
                        <option value='1'>لوازم خانگی</option>  
                        <option value='2'>لوازم التحریر</option>   
                        <option value='3'>خانه و آشپزخانه</option>        
                        <option value='4'>صنایع دستی</option>        
                        <option value='5'>مد وپوشاک</option>
                      </select>
                             <!-- <div class="mt-3">
                             <select id='selUser' style='width: 100%;' class="form-control">
                              <option value='0'>انتخاب دسته بندی</option>          
                              <option value='1'>لوازم خانگی</option>  
                              <option value='2'>لوازم التحریر</option>   
                              <option value='3'>خانه و آشپزخانه</option>        
                              <option value='4'>صنایع دستی</option>        
                              <option value='5'>مد وپوشاک</option>
                          </select>
                      </div> -->
                      <div id="price1" class=" text-right body-product">
                        
                          
                                <div class="first-name mt-4">
                                  <label for="">وزن محصول</label>
                                  <input type="text" name="weight" class="form-control-one p-2 w-100" placeholder="وزن مورد نظر خود را وارد نمایید">
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