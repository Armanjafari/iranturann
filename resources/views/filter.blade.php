@extends('layout.master')
@section('content')
<main>
        <div class="col-lg-12">
    </div>
    <div class="mt-3">
        <div class="col-lg-12">
        <div class="text-right">
           <span class="discount">بوتیک بیگ باکس</span>
           <a href="" class="link-application discount mr-3"><img src="{{asset('assets/img/svg element/دانلود.svg')}}" alt="" style="width:15px; display:inline-block" class="ml-2">لینک دانلود اپلیکیشن</a>
              
           <div class="float-left bg-light p-3">
           <span class=""><img src="{{asset('assets/img/svg element/رنگی.svg')}}" class="instagram1" alt=""></span>
           <span class="bazar2">whatsapp@</span>
           <span class="mr-2"><img src="{{asset('assets/img/icons8-whatsapp.svg')}}" class="instagram1" alt=""></span>
           <span class="bazar2">@telegram</span>
           <span class="mr-2"><img src="{{asset('assets/img/svg element/تلگرام2.svg')}}" alt="" class="instagram1"></span>
           <span class="bazar2">@instagram</span>
           </div>
                      </div> 
        <img src="{{asset('assets/img/بیگ باکس.png')}}" alt="" width="100%"
            class="mt-1 bootik">
        </div>
    </div>
    <div class="col-lg-12">
            <div class="row">
                    <div class="col-lg-3 mt-3">
                            <div class="text-center category1">
                          <a  href="#categry" data-toggle="collapse" aria-expanded="false" >دسته بندی</a>
                          </div>
                          <div class="box-categry text-center mt-2">
                                 <ul  class="collapse pr-0 m-3" id="categry">
                                         <li><input type="search" name="" id="" placeholder="جست وجو نام دسته بندی " class="p-2 form-control2 serch-box2"></li>
                                         <li class="caption1">
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                        </li>
                                        <li class="caption2">
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                        </li>
                                        <li class="caption3">
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">لباس مردانه</label>
                                        </li>
                                 </ul>
                          </div>
                          <div class="text-center category1">
                          <a  href="#brand" data-toggle="collapse" aria-expanded="false" >برند</a>
                          </div>
                          <div class="box-categry text-center mt-2">
                                 <ul  class="collapse pr-0 m-3" id="brand">
                                         <li><input type="search" name="" id="" placeholder="جست وجو در برند " class="p-2 form-control2 serch-box2"></li>
                                         <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">آدیداس</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">آدیداس</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">آدیداس</label>
                                        </li>
                                 </ul>
                          </div>
                          <div class="text-center category1">
                          <a  href="#color" data-toggle="collapse" aria-expanded="false" >رنگ</a>
                          </div>
                          <div class="box-categry text-center mt-2">
                                 <ul  class="collapse pr-0 m-3" id="color">
                                         
                                         <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">آبی</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">قرمز</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">سبز</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">سفید</label>
                                        </li>
                                 </ul>
                          </div>
                          <div class="text-center category1">
                          <a  href="#Price-range" data-toggle="collapse" aria-expanded="false" >محدوده قیمت</a>
                          </div>
                          <div class="box-categry text-center mt-2">
                                 <ul  class="collapse pr-0 m-3" id="Price-range">
                                         
                                         <li>
                                         <div class="range-wrap">
    <div class="range-value" id="rangeV"></div>
    <input id="range" type="range" min="200" max="800" value="200" step="1" class="ps6">
  </div>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">قرمز</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">سبز</label>
                                        </li>
                                        <li>
                                         <input type="checkbox" name="" id="caption-categry">       
                                         <label for="caption-categry" class="mt-2">سفید</label>
                                        </li>
                                 </ul>
                          </div>
                    </div>
            </div>
    </div>
</main>

        @endsection