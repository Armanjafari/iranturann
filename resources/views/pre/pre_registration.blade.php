@extends('layout.master')
@section('content')
<div class="card w-100 mt-5">
        <div class="card-body mb-4">  
          <!-- Stepper -->
          <div class="steps-form">
            <div class="steps-row setup-panel">              
              <div class="steps-step">
                <a href="#step-10" type="button" class="btn btn-indigo btn-circle active1" id="activeclasses1">1</a>
                <p>شماره موبایل وآدرس</p>
              </div>
              <div class="steps-step">
                <a href="#step-11" type="button" class="btn btn-default btn-circle" id="activeclasses" disabled="disabled">2</a>
                <p>صنف فعالیت</p>
              </div>          
            </div>
          </div>
      
          <form role="form" action="{{route('pre.registration')}}" method="post">
            @csrf
            <!-- First Step -->
            <div class="row setup-content" id="step-10">
              <div class="col-lg-12 text-right">  
                <h5 class="font-weight-bold pl-0 my-4 text-right"><strong>مرحله اول</strong></h5>
                <div class="row">
                        <div class="col-lg-4" style="margin-top:30px;">
                                <div class="form-group text-right d-lg-inline-block  mr-lg-3 mt-lg-0 mt-5 w-100">
                                 <label for="exampleFormControlSelect1" style="font-size: 1.1em;"> آدرس محل فروشگاه</label>
                                 <select name="city" class="w-100 p-lg-3 p-3 form-control-4" id="exampleFormCotrolSelenct1">
                                   <option value="lar">لار</option>
                                   <option value="evaz">اوز</option>
                                   <option value="gerash">گراش</option>
                                   <option value="ghor">خور</option>
                                   <option value="latifi">لطیفی</option>
                                 </select>
                             </div>
                         </div>
   
                <div class="col-lg-4">
                       <div  class="mr-lg-3 text-right first_name  d-lg-inline-block  w-100 mt-lg-0 mt-5">
                        <label>آدرس</label>
                       <input name="address" type="text" class="form-control input-lg   p-3" placeholder="آدرس خود را وارد نمایید">
                       </div>
                </div>
                <div class="col-lg-4 mt-5 mt-sm-0">
                        <div class="  text-right first_name  d-lg-inline-block w-100">
                                <label>شماره موبایل</label>
                               <input name="mobile" type="text" class="form-control input-lg  form-control-2 p-3" placeholder="شماره موبایل خود راوارد نمایید">
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
                                <div class="col-lg-4">
                                             <div class="  text-right first_name  d-lg-inline-block w-100">
                                                     <label>صنف فعالیت</label>
                                                    <input name="senf" type="text" class="form-control input-lg  form-control-2 p-3" placeholder="مثال :فروشگاه پوشاک مردانه">
                                                    </div>
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
                <div class="img-bg justify-content-center align-items-start d-flex w-100">
                        <img src="assets/img/اژدها پیکر.png" alt="" class="img-city1">
                <a  class="btn Vendors-page mt-3" href="">صفحه ثبت نام فروشندگان لار</a>
                </div>
        </div>
              </div>
        </div>
      </main>
@endsection