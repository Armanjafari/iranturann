@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">
    <div class="card-header text-center mt-1 add-product-box">
        <span class="add-product">محصولات فروشنده</span>
    </div>
  <div class="card"> 
      <div class="csrd-body">
    <div class="row">
        <div class="col-lg-4  ml-auto mt-4-5 text-center">
            <form method="POST" action="{{ route('admin.market.status',$market->id) }}">
                @csrf
            <div class="first-name2 p-3 mt-4-5">
                <span>فعال سازی فروشنده</span>
                <label class="switch mt-3 mr-3">
                    <input name="is_super_active" type="checkbox">
                    <span class="slider round"></span>
                </label><br>
                <span>فعال سازی حساب فروشنده</span>
                <label class="switch mt-3 mr-3">
    
                    <input name="is_active" type="checkbox">
                    <span class="slider round"></span>
                </label> <br>
                <input type="submit" class="btn btn-info" value="ذخیره">
            </form>
            </div> 
            <div class="col-lg-4  ml-auto mt-4-5 text-center">
                <form method="POST" action="{{ route('admin.market.status',$market->id) }}">
                    @csrf
                <div class="first-name2 p-3 mt-4-5">
                   
                    <span>فعال سازی فروشنده</span>
                    <label class="switch mt-3 mr-3">
                        <input name="is_super_active" type="checkbox">
                        <span class="slider round"></span>
                    </label><br>
                    <span>فعال سازی حساب فروشنده</span>
                    <label class="switch mt-3 mr-3">
        
                        <input name="is_active" type="checkbox">
                        <span class="slider round"></span>
                    </label> <br>
                    <input type="submit" class="btn btn-info" value="ذخیره">
                </form>
                </div> 
    
    </div>      
</div></div>
  
        <div class="col-lg-12">
            <div class="first-name2 mt-4-5">

            </div>
        </div>
  
    </div>
    <div class="row">
       @forelse ($market->products as  $product)
       <div class="col-lg-4 mt-3">
        <div class="card text-center">
            <img class="card-img-top"
                src="https://dkstatics-public.digikala.com/digikala-products/325689.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80"
                alt="هپل">
            <div class="card-body">
                <h5 class="card-title"> {{$product->pure->title}} </h5>
                <p class="card-text"> {{$product->pure->price}} </p>
                <form action="" method="get">
                <input value="فعال" type="submit" class="btn btn-primary pl-3 pr-3 pt-2 pb-2 btn-Record2">
            </div>
        </div>
    </div>
</form>

       @empty
           
       @endforelse
</div>

</div>
@endsection