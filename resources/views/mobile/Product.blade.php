@extends('mobile.layout.master')
@section('content')
    <div class="container-fluid mb-5">
        <div class="row mb-5">
        <!--  start add product to cart -->
        <div class="content2  text-right">
            <div class="d-inline-block mt-2">
                <a href="{{ route('basket.add', $option->id) }}" class="product-action mr-3">افزودن به سبد خرید</a>
                <span class="mr-5 font14">{{number_format($option->price)}}تومان</span>
            </div>
    </div>
   <!--  end add product to cart -->
    <!-- start img single -->
           <div class="col-lg-12">
            <div class="owl-carousel owl-theme mt-3 text-center" id="owl-mobile">
               
            @forelse ($product->pure->images as $image)
            <div class="img-box text-center">
              <img src="{{ $image->address }}" alt="asdsad" class="img-single-product">
           </div>
            @empty

            @endforelse
            
            </div>
           </div>
           <!-- end img single -->
           <!-- start redirect category -->
           <div class="col-lg-12">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#" class="font10 link-breadcrumb">{{$product->pure->brand->persian_name}}</a></li>
                      <li class="breadcrumb-item"><a href="#" class="font10 link-breadcrumb">{{$product->pure->category->persian_name}}</a></li>
                    </ol>
                  </nav>
            </div>
             <!-- end redirect category -->
             <!-- start title and color product -->
            <div class="text-right">
            <p>{{$product->pure->persian_title}} </p>
            @if($option->colors->option_id == 1)
            <span>رنگ:</span>
            <span>خاکستری</span>
        </div>
        <form action="">
            <div class="row">                
              @forelse ($product->fulls()->where('is_active' , 1)->get() as $full)
        
              <a href="{{ route('mobile.product.single' ,['market' => $market->id , 'option'=>$full->id]) }}" class="color-boreder mt-3 {{ $option->id ==  $full->id ? 'active-color' : ''}}" style="background-color: {{$full->colors->value}}; width: 25px; height:25px;border-radius: 50%;margin-right: 10px; border: none;"></a>
              @empty
              
              @endforelse
            </div>    
    </form>  
         <!-- end title and color product -->   
            @else
            <!-- start size product -->
          <form action="">
            <div class="col-lg-12 mt-3">
              <div class="size-product p-2 text-right" data-toggle="modal" data-target="#exampleModalCenter">
                <span class="text-size font-14">سایز:</span>
                <span class="text-size font-14">40</span>
                <img src="img/svg/arrow.svg" alt="" class="size-arrow float-left">
                <span class="font14  float-left  text-size">(3سایز)</span>
              </div>
<!-- start Modal size -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">سایز:40</h6>
      </div>
      <div class="modal-body text-right">
       <a href="" class="button-size font12 mr-3 p-2">سایز40</a>
       <a href="" class="button-size font12 mr-3 p-2">سایز38</a>
       <a href="" class="button-size font12 mr-3 p-2">سایز36</a>
      </div>
    </div>
  </div>
</div>
<!-- end Modal size -->
       </div>
       </form>
       <!-- end size product -->
            @endif
              
         
    </div>
    <!-- start id product -->
        <div class="col-lg-6 text-right mt-3">
            <span class="font12">شناسه محصول</span>
           <span class="font12 id-product">{{$option->id}}</span>
        </div>
       <!-- end id product -->
       <!-- start description and comments and questions -->
       <div class="col-lg-12 text-right mt-3">
           <img src="{{asset('assets/mobile/img/WhatsApp Image 2021-08-28 at 20.24.34.jpeg')}}" alt="" class="icons-product">
           <span class="mr-2 font12">فروشنده:</span>
           <span class="font12">{{$market->market_name}}</span>
       </div>
       <div class="col-lg-12 text-right mt-3">
        <img src="{{asset('assets/mobile/img/WhatsApp Image 2021-08-28 at 18.11.48.jpeg')}}" alt="" class="icons-product">
        <span class="font12 mr-2">{{$option->waranty->name}}</span>
    </div>
    <div class="col-lg-12 text-right mt-3">
        <img src="{{asset('assets/mobile/img/WhatsApp Image 2021-08-28 at 20.20.44.jpeg')}}" alt="" class="icons-product">
        <span class="font12 mr-2">موجودی در انبار</span>
    </div>
    @if ($option->ordering)
    <div class="col-lg-12 text-right mt-3">
      <img src="{{asset('assets/mobile/img/WhatsApp Image 2021-08-28 at 18.11.54.jpeg')}}" alt="" class="icons-product">
      <span class="font12 mr-2">ارسال از {{$option->ordering}} روزکاری آینده</span>
  </div>
    @else
    <div class="col-lg-12 text-right mt-3">
      <img src="{{asset('assets/mobile/img/WhatsApp Image 2021-08-28 at 18.11.54.jpeg')}}" alt="" class="icons-product">
      <span class="font12 mr-2">آماده ارسال</span>
  </div>
    @endif
    <div class="col-lg-12 mt-3">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">توضیحات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">نظرات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">سوالات</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="Description text-right p-3">
                    <p>
                      {{$product->pure->description}}
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"> <div class="Description p-3 text-right">نظرات</div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"> <div class="Description p-3 text-right">سوالات</div>
          </div>
    </div>
</div>
    <!-- end description and comments and questions -->
    
</div>
</div>
@endsection