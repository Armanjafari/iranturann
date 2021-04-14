@extends('Admin.layout.master')
@section('content')
    <!-- Start Title -->
      <div class="col-lg-9">
        <div class="card-header add-product-box text-center">
          <span class="add-product"> تنظیمات محصولات </span>
        </div>
        <!-- ُEnd Title -->
        <div class="card mt-3 information-box">
          <div class="card-body text-right">
            <div class="row">
              
              <div class="col-lg-6">
                <form action=" {{ route('create.categroy') }} " method="POST">
                  @csrf
                <div class="first-name">
                  <label class="label">نام دسته بندی</label>
                  <input type="text" name="persian_name" class="form-control p-3 form-control-one"
                    placeholder="نام محصول خود را وارد نمایید">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="first-name">
                  <label>نام انگلیسی دسته بندی</label>
                  <input type="text" name="name" class="form-control p-3 form-control-one"
                    placeholder="نام انگلیسی محصول خود را وارد نمایید">
                </div>
              </div>
              <div class="col-lg-6 mt-4-5">
                <div class="card form-control-one">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleFormControlSelect1" style="font-size: 1.1em;">سردسته</label>
                      <select class="form-control" name="parent" id="exampleFormControlSelect1">
                        @forelse ( $categories as $category)
                        <option value="{{ $category->id }}"> {{ $category->persian_name }} </option>
                        @empty
                          دسته بندی وجود ندارد
                        @endforelse                      
                      </select>
                  </div>
                      </div>
                  </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="d-flex mr-5 align-items-center mt-5">
                      <input class="btn-Record text-light"type="submit" value="ثبت">
                </div>
              </div>
            </form>

              
      </div>
      </div>
    </div>
    
    <div class="card mt-5 text-right box-menu">
        
          <div class="card-body">
               
            <form action="{{ route('create.option') }}" method="post">
              @csrf
                <div class="row">
                <div class="col-lg-6">
                <div class="first-name">
                  <label class="label">نوع</label>
                  <input type="text" name="name" class="form-control p-3 form-control-one"
                    placeholder="نام محصول خود را وارد نمایید">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex mr-5 align-items-center">
                        <input class="btn-Record text-light"type="submit" value="ثبت">
                  </div>
                </div>
            </div>
            </form>
        

    </div> 
          </div>
          <div class="card mt-3 information-box">
            <div class="card-body text-right">
              <div class="row">
                
                <div class="col-lg-6">
                  <form action="" method="post">
                  <div class="first-name">
                    <label class="label">عنوان</label>
                    <input type="text" class="form-control p-3 form-control-one"
                      placeholder="نام محصول خود را وارد نمایید">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="first-name">
                    <label>مقدار</label>
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
                        <label for="exampleFormControlSelect1" style="font-size: 1.1em;">نوع</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>دیجیتال</option>
                          <option>لوازم خانگی</option>
                          <option>پوشاک</option>
                          <option>مواد غذایی</option>
                        </select>
                    </div>
                  </form>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex mr-5 align-items-center mt-5">
                        <input class="btn-Record text-light"type="submit" value="ثبت">
                  </div>
                </div>
                
        </div>
        </div>
      </div>
          <div class="card mt-5 text-right box-menu">
        
            <div class="card-body">
                 
              <form action="{{ route('create.brand') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                  <div class="col-lg-6">
                  <div class="first-name">
                    <label class="label">برند</label>
                    <input type="text" name="persian_name" class="form-control p-3 form-control-one"
                      placeholder="نام محصول خود را وارد نمایید">
                  </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="first-name">
                      <label class="label">نام انگلیسی</label>
                      <input type="text" name="name" class="form-control p-3 form-control-one"
                        placeholder="نام محصول خود را وارد نمایید">
                    </div>
                    </div>
                  <div class="col-lg-3">
                    <label for="files" class="apload-img">آپلود عکس</label>
                    <input id="files" style="visibility:hidden;" name="image" type="file">
                  </div>
                  <div class="col-lg-12">
                      <div class="d-flex  align-items-center justify-content-center">
                          <input class="btn-Record text-light"type="submit" value="ثبت">
                    </div>
                  </div>
              </div>
              </form>
          
  
      </div> 
            </div>
            <div class="card mt-5 text-right">
        
                <div class="card-body">
                     
                  <form action="" method="post">
                      <div class="row">
                      <div class="col-lg-6">
                      <div class="first-name">
                        <label class="label">گارانتی</label>
                        <input type="text" class="form-control p-3 form-control-one"
                          placeholder="نام محصول خود را وارد نمایید">
                      </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="d-flex mr-5 align-items-center">
                              <input class="btn-Record text-light"type="submit" value="ثبت">
                        </div>
                      </div>
                  </div>
                  </form>
              
      
          </div> 
                </div>
                <div class="card mt-3 information-box box-menu">
                    <div class="card-body text-right">
                      <div class="row">
                        
                        <div class="col-lg-6">
                          <form action="" method="post">
                          <div class="first-name">
                            <label class="label">ویژگی</label>
                            <input type="text" class="form-control p-3 form-control-one"
                              placeholder="نام محصول خود را وارد نمایید">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="first-name">
                            <label>مقدار ویژگی</label>
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
                                <label for="exampleFormControlSelect1" style="font-size: 1.1em;">سردسته</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option>دیجیتال</option>
                                  <option>لوازم خانگی</option>
                                  <option>پوشاک</option>
                                  <option>مواد غذایی</option>
                                </select>
                            </div>
                          </form>
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
                                  <label for="exampleFormControlSelect1" style="font-size: 1.1em;">سردسته</label>
                                  <select class="form-control" id="exampleFormControlSelect1">
                                    <option>دیجیتال</option>
                                    <option>لوازم خانگی</option>
                                    <option>پوشاک</option>
                                    <option>مواد غذایی</option>
                                  </select>
                              </div>
                            </form>
                                  </div>
                              </div>
                              </div>
                            </div>
                          </div>
                        <div class="col-lg-12">
                            <div class="d-flex mr-5 align-items-center justify-content-center mt-5">
                                <input class="btn-Record text-light"type="submit" value="ثبت">
                          </div>
                        </div>
                        
                </div>
                </div>
              </div>
    </div>
  @endsection