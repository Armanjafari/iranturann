@extends('layout.master')
@section('content')
<main><br>
    <!-- <div class="row">
         <div class="col-lg-8 mt-3">
             <div class="card">
                <div class="owl-carousel owl-theme" id="owl-mobile9">
                    <div class="item">
                        <a href="#">
                            <img src="assets/img/117606354.png" alt="">
                        </a>
                    </div>
             </div>
         </div>
        </div> -->
    <div class="row">
        <div class="col-lg-4 pl-lg-0">
            <div class="card border-0">
            <div class="mySlides">
          <img src="{{asset('assets/img/01.png')}}" style="width: 100%;">
          </div>
          <div class="mySlides">           
             <img src="{{asset('assets/img/02.png')}}" style="width: 100%;">
          </div>
          <div class="mySlides">
            <img src="{{asset('assets/img/5852ac425c16e3ae3cbdc1b20596f723c54ec355_1604466916.png')}}" style="width:100%">
          </div> 
          <div class="mySlides">
            <img src="{{asset('assets/img/6a6650c08fe4b430782cebfa62539ab56ab2b741_1601964067.png')}}" style="width:100%">
          </div>
          <div class="mySlides">
            <img src="{{asset('assets/img/03.png')}}" style="width:100%">
          </div>
            
        
          <!-- <a class="next" onclick="plusSlides(1)">❯</a>
          <a class="prev" onclick="plusSlides(-1)">❮</a> -->
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="{{asset('assets/img/01.png')}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('assets/img/02.png')}}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('assets/img/5852ac425c16e3ae3cbdc1b20596f723c54ec355_1604466916.png')}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('assets/img/6a6650c08fe4b430782cebfa62539ab56ab2b741_1601964067.png')}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('assets/img/03.png')}}" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
            </div>    
          </div>
            </div>
        </div>
        <div class="col-lg-4 pr-lg-0">
            <div class="card text-right border-0 h-100">
                <div class="card-body">
                    <figcaption>
                        <a href="#" class="caption-product"> {{ $option->title }} </a>
                    </figcaption>
                   
                    
                   
                
                    <div class="mt-3 box-brand mr-3">
                        <span></span>
                        <span>برند:</span>
                        <a href="#" class="link-brand">سامسونگ</a>
                        <span class="mr-3">دسته بندی:</span>
                        <a href="{{ route('product.by.category', $option->category->id) }}" class="link-brand">
                            {{$option->category->persian_name}} </a>
                    </div>
                    <div class="mt-3 box-brand mr-3">
                         <span class="link-product"> هودی ادی داس طرح زمستانه</span>
                         <p class="link-in mt-2 text-right">Men's winter hoodie</p>
                    </div>
                    @forelse ($option->products as $product)
                    @forelse ($product->fulls as $full)
                    <form action="{{ route('product.single' , $full->id) }}" method="GET">
                        
                        <button type="submit" class="btn btn-light">
                            <p style="color:{{$full->colors->value}}" data-id="{{$option->title}}">{{$full->colors->title}}</p>
                        </button>
                    </form>
                    @empty
                        
                    @endforelse
                        
                        @empty

                        @endforelse 
                    <div class="mt-3 color-product-box mr-3">
                     <span>رنگ:</span>
                     <span>آبی</span><br>
                         
                        <a  class="rounded-circle d-inline-block mr-2 mt-2 color-boreder active" href="#" style="background-color:#ccc"></a>
                        <a class="rounded-circle d-inline-block mr-2 mt-2 color-boreder" style="background-color:blue" href="#"></a>
                        <a class="rounded-circle d-inline-block mr-2 mt-2 color-boreder" style="background-color:red" href="#"></a>
                    </div>
                    <div class="mt-5 text-right">
                        <ul class="Attributes">ویژگی ها
                            <li class="mt-2">
                                <span class="dot2" style="background-color: #FFCC33;"></span>
                                <span>کیفیت:</span>
                                <span>خوب</span>
                            </li>
                            <li class="mt-2">
                                <span class="dot2" style="background-color: #FFCC33;"></span>
                                <span>جنس:</span>
                                <span>پنبه کلاه دار</span>
                            </li>
                            <li class="mt-2">
                                <span class="dot2" style="background-color: #FFCC33;"></span>
                                <span>قیمت مناسب</span>
                            </li>
                        </ul>
                        <!-- <form action="" class="mt-3">
                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label
                                    for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label
                                    for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label
                                    for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label
                                    for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                    for="1">☆</label>
                            </div>
                        </form> -->
                       <span class="bvn">مشاهده بیشتر</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-body text-center">
                    <img src="{{asset('assets/img/svg element/فروشنده.svg')}}" alt="">
                <span class="marketer1 mr-2">فروشنده: ایران توران</span>
                <a href="" class="marketer1 mr-5">فروشنده های دیگر: 3</a>
                <div class="text-right mr-4 mt-3">
                <img src="{{asset('assets/img/svg element/گارانتی.svg')}}" alt="">
                <span class="marketer1 mr-2">گارانتی اصالت و سلامت فیزیکی کالا</span>
                </div>
                <div class="text-right mr-4 mt-2">
                <img src="{{asset('assets/img/svg element/موجود در انبار.svg')}}" alt="">
                <span class="marketer1 mr-2">موجود در انبار</span>
                </div>
                    <!-- <div
                        class="Circle-discount  text-light position-relative d-inline-flex justify-content-center align-items-center mr-5 mt-5 p-5">
                        <div class="text-center mt-2">
                            <a href="#" class="text-light discount-percent">25%
                            </a>
                            <p>تخفیف</p>
                        </div>
                    </div> -->
                    <div class="mt-5 d-flex justify-content-center">
                       
                        <a href="#" class="price-product">125,000تومان</a>
                     
                        <div class="mr-5">
                        <span class="badge badge-danger badge-1 text-left">25%</span>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <a href="#" class="price"> {{number_format($option->price)}} تومان</a>
                    </div>
                   
                    <form action="">
                        <div class="d-flex justify-content-center mt-5">
                            <a href="{{ route('basket.add', $option->id) }}" class="Add-to-cart">افزودن به سبد خرید</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card-header text-center mt-5 card-header-product w-100"><a class="new-product">محصولات مربوط</a>
        </div>
        <div class="owl-carousel owl-theme mt-5" id="owl-mobile10">
            @forelse ($related as $relate)
            <div class="item">
                <div class="card card-product-warning">
                    <div class="card-body text-center">
                        <figure class="mb-0">
                            <img src="{{ $relate->pure->images->first()->address ?? "#"}}" alt="">
                        </figure>
                        <caption>
                            <a href="#">{{ $relate->pure->persian_title }}</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0">
                            s</p>
                        <button type="button" class="btn-add-red mt-3"><a href="#"
                                class="adding-product">صفحه محصول</a></button>
                    </div>
                </div>
            </div>
        
            @empty
                
            @endforelse
        </div>
        <div class="col-lg-12 mt-5">
            <div class="container">
                <div class="col-md-12 pr-0 pl-0">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">مشخصات</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">توضیحات</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">نظرات</a>
                                <a class="nav-item nav-link" id="nav-questions-tab" data-toggle="tab" href="#nav-questions"
                                role="tab" aria-controls="nav-questions" aria-selected="false">سوالات</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                            <div class="col-lg-3 col-5">
                           <div class="content-Specifications  text-center">
                               <span>قد هودی:</span><br><br>
                             <span>کلاه:</span><br><br>
                             <span>کیفیت :</span><br><br>
                           </div>

                            </div>
                            <div class="col-lg-9 col-7 text-right">
                                
                            <span>80سانتی متر</span><br><br>
                            <span>دارد</span><br><br>
                            <span>درجه یک</span><br><br>
                            
</div>
</div>
                            <!-- <table class="table  table-striped table-responsive text-right" cellspacing="0"> -->
                                <!-- <tbody>
                                    @forelse ($option->attributes as $attribute)
                                    <tr>
                                        <td><a href="#">{{ $attribute->name }}</a></td>
                                        <td> {{ $attribute->pivot->values->value }} </td>
                                    </tr>
                                    @empty

                                    @endforelse
                                </tbody> -->
                            <!-- </table> -->
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="card p-5">
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان
                                    گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و
                                    برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و
                                    متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                                    الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید
                                    داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان
                                    مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود
                                    طراحی اساسا مورد استفاده قرار گیرد.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="col-lg-12 pr-0 pl-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                               
                                                 
                                                    <div style=" direction:ltr;" class="float-right">
                                                  
                                                 <div class="text-right mr-3">
                                                 <span>‏4.3 از 5</span>
                                                 </div>
                                                 <div class="mt-3">
                                                 <span class="mr-3"> از مجموع</span>
                                                    <span>1700 امتیاز</span>
                                                     <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span>
                                                     </div>
                                                    <hr>
                                                    </div>
                                            
                                                <div class="mt-5">
                                                <a  class="Add-to-cart1 float-right" data-toggle="modal" data-target="#exampleModal">افزودن دیدگاه</a>
                                                <div class="ml-5">
                                                <!-- <textarea name="" id=""  class="mybor" id="mybor" cols="30" rows="10"></textarea> -->
                                           <!-- Modal -->
                                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                            </button>
                                         <h5 class="modal-title ml-auto" id="exampleModalLabel">دیدگاه خود را بیان کنید.</h5>
                                              </div>
                                              <div class="modal-body text-center">
                                              <textarea name="" id=""  class="mybor" id="mybor" cols="30" rows="10"></textarea>
                                                </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                                           <a class="btn btn-primary mr-3" href="">افزودن دیدگاه</a>
                                               </div>
    </div>
  </div>
</div>
                                            </div>
                                            </div>   
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="text-right Scoring-system text-center mt-sm-0 mt-3">
                                                    <span>نظرات کاربران</span>
                                                </div>
                                                <div class="card mt-3 p-3 card-coment">
                                                <span class="text-right mt-2">‏26 خرداد 1400</span>
                                                    <p class="text-right mt-2">از نظر کیفیت خوب بود اما قیمتش نسبتا بالا بود
                                                    </p>
                                                    <div class="text-center">
                                                    <a  href="">تایید دیدگاه</a>
                                                    <span class="mr-3">3</span>
                                                    <img src="{{asset('assets/img/لایک.svg')}}" alt="" class="dis-like mr-2">
                                                    <img src="{{asset('assets/img/دیس لایک.svg')}}" alt="" class="dis-like mr-2 mt-2">
                                                    </div>
                                                    <span class="text-right mt-2">‏26 خرداد 1400</span>
                                                    <p class="text-right mt-2">از نظر کیفیت و ساخت ضعیف بود من ناراضیم
                                                    </p>
                                                    <div class="text-center">
                                                    <a  href="">تایید دیدگاه</a>
                                                    <span class="mr-3">3</span>
                                                    <img src="{{asset('assets/img/لایک.svg')}}" alt="" class="dis-like mr-2">
                                                    <img src="{{asset('assets/img/دیس لایک.svg')}}" alt="" class="dis-like mr-2 mt-2">
                                                    </div>
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="nav-questions" role="tabpanel"
                            aria-labelledby="nav-questions-tab">
                            <div class="col-lg-12 pr-0 pl-0">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                               
                                                 
                                                    <div style=" direction:ltr;" class="float-right">
                                                  
                                                 <div class="text-right mr-3">
                                                 <span>‏4.3 از 5</span>
                                                 </div>
                                                 <div class="mt-3">
                                                 <span class="mr-3"> از مجموع</span>
                                                    <span>1700 امتیاز</span>
                                                     <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span class="fa fa-star checked"></span><span class="fa fa-star unchecked"></span>
                                                     </div>
                                                    <hr>
                                                    </div>
                                            
                                                <div class="mt-5">
                                                <a  class="Add-to-cart1 float-right" data-toggle="modal" data-target="#exampleModal1">ثبت پرسش</a>
                                                <div class="ml-5">
                                                <!-- <textarea name="" id=""  class="mybor" id="mybor" cols="30" rows="10"></textarea> -->
                                           <!-- Modal -->
                                     <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                            </button>
                                         <h5 class="modal-title ml-auto" id="exampleModalLabel">سوال خود را در مورد این کالا بیان کنید</h5>
                                              </div>
                                              <div class="modal-body text-center">
                                              <textarea name="" id=""  class="mybor" id="mybor" cols="30" rows="10"></textarea>
                                                </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">خروج</button>
                                           <a class="btn btn-primary mr-3" href="">ثبت پرسش</a>
                                               </div>
    </div>
  </div>
</div>
                                            </div>
                                            </div>   
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="d-flex justify-content-start">
                                                <span class="Ordering1">مرتب سازی بر اساس:</span>
                                                <a href="" class="newest">جدید ترین ها</a>
                                                <a href="" class="newest">مفید ترین ها</a>
                                                </div>
                                                <div class="card mt-3 p-3 card-coment">
                                                    <div class="text-right">
                                                        <img src="{{asset('assets/img/سوال.svg')}}" alt="">
                                                    <p class=" mt-3 d-inline-block">آیا محصول با کد A23را می توان به صورت عمده خرید کرد؟
                                                    </p>
                                                    </div>
                                                    <div class="text-right question3">
                                                    <span>پاسخ:</span>
                                                    <span>بله در صورت هماهنگی با فروشنده امکان پذیر است</span>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                    <a  href="">مفید بودن پاسخ</a>
                                                    <span class="mr-3">3</span>
                                                    <img src="{{asset('assets/img/لایک.svg')}}" alt="" class="dis-like mr-2">
                                                    <img src="{{asset('assets/img/دیس لایک.svg')}}" alt="" class="dis-like mr-2 mt-2">
                                                    </div>
                                                    <div class="text-right">
                                                        <img src="{{asset('assets/img/سوال.svg')}}" alt="">
                                                    <p class=" mt-3 d-inline-block">آیا محصول با کد A23را می توان به صورت عمده خرید کرد؟
                                                    </p>
                                                    </div>
                                                    <div class="text-right question3">
                                                    <span>پاسخ:</span>
                                                    <span>بله در صورت هماهنگی با فروشنده امکان پذیر است</span>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                    <a  href="">مفید بودن پاسخ</a>
                                                    <span class="mr-3">3</span>
                                                    <img src="{{asset('assets/img/لایک.svg')}}" alt="" class="dis-like mr-2">
                                                    <img src="{{asset('assets/img/دیس لایک.svg')}}" alt="" class="dis-like mr-2 mt-2">
                                                    </div>
                                                    <div class="text-right">
                                                        <img src="{{asset('assets/img/سوال.svg')}}" alt="">
                                                    <p class=" mt-3 d-inline-block">آیا محصول با کد A23را می توان به صورت عمده خرید کرد؟
                                                    </p>
                                                    </div>
                                                    <div class="text-right question3">
                                                    <span>پاسخ:</span>
                                                    <span>بله در صورت هماهنگی با فروشنده امکان پذیر است</span>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                    <a  href="">مفید بودن پاسخ</a>
                                                    <span class="mr-3">3</span>
                                                    <img src="{{asset('assets/img/لایک.svg')}}" alt="" class="dis-like mr-2">
                                                    <img src="{{asset('assets/img/دیس لایک.svg')}}" alt="" class="dis-like mr-2 mt-2">
                                                    </div>
                                                  
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="col-lg-12 mt-5">

            <div class="card">
                <div class="card-body">

                    <div class="text-right Scoring-system text-center mt-sm-0 mt-3 p-1">
                        <p class="mt-1">پرسش و پاسخ</p>
                        <p style="font-size: 0.9em;">سوال خود را در مورد محصول مطرح کنید</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <span class="question float-right mt-3 mr-3">پرسش</span>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <input type="text" name="" id="" class="form-control p-2 w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection