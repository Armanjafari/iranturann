    @extends('layout.master')
    @section('content')
    <main><br><br><br><br>
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
        <div class="container">
          <div class="mySlides">
          <img src="{{$product->image}}" style="width: 100%;">
          </div>
          
            
        
          <!-- <a class="next" onclick="plusSlides(1)">❯</a>
          <a class="prev" onclick="plusSlides(-1)">❮</a> -->
          <div class="row">
            <div class="column">
              <img class="demo cursor" src="{{$product->image}}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
              
          </div>
        </div>
        </div>
    </div>
        <div class="col-lg-4 pr-lg-0">
          <div class="card text-center border-0 h-100">
           <div class="card-body">  
                <figcaption>
                   <a href="#" class="caption-product"> {{ $product->title }} </a>
                </figcaption>
                <div class="mt-3 box-brand">
               <span>برند:</span>
               <a href="#" class="link-brand">ادیداس</a>
              </div>
              <div class="mt-3 box-brand">
                <span>دسته بندی:</span>
                <a href="{{ route('product.by.category', $product->pure->category->id) }}" class="link-brand"> {{$product->pure->category->persian_name}} </a>
              </div>
              <div class="mt-3 color-product-box">
                @foreach ($diffrent_colors as $color)
                <form action="{{ route('product.single' , $color->id) }}" method="GET">
                    <button type="submit"  class="btn btn-light">
                    <p style="color:{{$color->colors->value}}">{{$color->colors->title}}</p>
                    </button>
                </form>
                @endforeach
              </div>
              <div class="mt-5 text-right mr-5">
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
                       <form action="" class="mt-3">
                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </form>
              </div>
           </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
                  <div class="card-body text-center">
                          <div class="d-inline-block mt-5">
                          <a class="Available">موجود درانبار</a>
                          </div>
                          <div class="Circle-discount  text-light position-relative d-inline-flex justify-content-center align-items-center mr-5 mt-5 p-5">
                                <div class="text-center mt-2">
                                <a href="#" class="text-light discount-percent">25%
                                </a>
                                <p>تخفیف</p>
                            </div>
                            </div>
                            <div class="mt-5">
                            <a href="#"  class="price"> {{$option->price}} تومان</a>
                            </div>
                            <div class="mt-3 d-flex justify-content-center">
                                <a href="#"  class="price-product">125000تومان</a>
                            </div>
                            <form action="">
                            <div class="d-flex justify-content-center mt-5">
                                <a href="{{ route('basket.add', $option->id) }}" class="Add-to-cart">افزودن به سبد خرید</a>
                            </div>
                        </form>
                  </div>
          </div>
        </div>
        <div class="card-header text-center mt-5 card-header-product w-100"><a class="new-product">محصولات مربوط</a></div>
        <div class="owl-carousel owl-theme mt-5" id="owl-mobile10">
                <div class="item"> <div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0">
                            <a href="#">تومان125000</a></p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
                <div class="item"><div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold -mt1 mb-0">
                            <a href="#">تومان125000</a></p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
                <div class="item"><div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0">
                            <a href="#">تومان125000</a></p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
                <div class="item"><div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0">
                            <a href="#">تومان125000</a></p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
                <div class="item">
                    <div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0"><a href="#">تومان125000</a></p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
                <div class="item"><div class="card card-product-warning">
                    <div class="card-body text-center">
                      <figure class="mb-0">
                          <img src="assets/img/Untitled.png" alt="">
                      </figure>
                      <caption>
                          <a href="#">هودی ادی داس طرح زمستانه</a>
                        </caption><br>
                        <p class="font-weight-bold mt-1 mb-0">
                        125000تومان</p>
                       <button type="button" class="btn-add-red mt-3"><a href="#" class="adding-product">افزودن</a></button>
                    </div>
                </div></div>
    </div> 
    <div class="col-lg-12 mt-5">
        <div class="container">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">جزئیات</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">توضیحات</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">نظرات</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table  table-striped table-responsive text-right" cellspacing="0">
                                <tbody>
                                    @foreach ($pure->attributes as $attribute)
                                    <tr>
                                        <td><a href="#">{{ $attribute->name }}</a></td>
                                        <td> {{ $attribute->pivot->values->value }} </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                           <div class="card p-5">
                               <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                               </p>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                         <div class="col-lg-4">
                                                <div class="text-right Scoring-system d-table">
                                                        <span style="white-space: pre;"> امتیاز دهی به </span>
                                                        <a href="#">هودی مردانه آدیداس طرح زمستانه</a>
                                                           </div>                                                        
                                                            <form action="">
                                                             <div class="mt-3">
                                                                <div class="rating"> <input type="radio" name="rating" value="5" id="6"><label for="6">☆</label> <input type="radio" name="rating" value="4" id="6"><label for="6">☆</label> <input type="radio" name="rating" value="3" id="7"><label for="7">☆</label> <input type="radio" name="rating" value="2" id="8"><label for="8">☆</label> <input type="radio" name="rating" value="1" id="9"><label for="9">☆</label>
                                                                </div>
                                                             </div>
                                                            </form>                                    
                                        
                                        
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="text-right Scoring-system text-center mt-sm-0 mt-3">
                                                <span>نظرات کاربران</span>
                                                </div>
                                                <div class="card mt-3 p-3 card-coment">
                                                      <p class="text-right">از نظر کیفیت خوب بود اما قیمتش نسبتا بالا بود</p>
                                                      <p class="text-right">از نظر کیفیت و ساخت ضعیف بود من ناراضیم</p>
                                                      <p class="text-right">از نظر کیفیت خوب بوداما امکاناتش کم بود</p>
                                                      <p class="text-right">از نظر کیفیت خوب بود اما قیمتش نسبتا بالا بود</p>
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