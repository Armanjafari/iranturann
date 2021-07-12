@extends('Market.layout.master')
@section('content')
<form action="{{ route('market.variety.add') }}" method="post">
    @csrf
    <select name="product" style="visibility: hidden;" class="form-control" >
        <option value="{{$product}}"></option>
    </select>
    <div class="col-lg-12">
        <div class="card border-dark-d mb-3">
            <div class="row">
            <!-- <div class="col-lg-3 text-right">
                            
                                 <label for="exampleFormControlSelect2" class=""> آدرس محل فروشگاه</label>
                                 <select class="w-100 p-2" name="waranty" id="exampleFormCotrolSelenct2" style="border: 3px solid #ffcc33;">
                                   <option value="lar">لار</option>
                                   <option value="evaz">اوز</option>
                                   <option value="gerash">گراش</option>
                                   <option value="ghor">خور</option>
                                   <option value="latifi">لطیفی</option>
                                 </select>
                             </div> -->
                <!-- <div class="col-lg-3 mt-5">
                  <label for="">گارانتی محصول</label>
                    <select name="waranty" class="form-control" id="">
                        @forelse ($waranties as $waranty)
                        <option value="{{$waranty->id}}">{{$waranty->name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div> -->
                <div class="col-lg-12">
                    <div class="card form-control-one p-3">
                        <div class="row">
                            <div class="col-lg-3 text-right">
                            
                                <label for="exampleFormControlSelect2" class=""> وضعیت ارسال</label>
                                <select class="w-100 p-2" name="ordering" id="exampleFormCotrolSelenct2" style="border: 3px solid #ffcc33;">
                                    <option value="0"> آماده ارسال </option>
                            @for ($i = 1; $i < 30; $i++)
                                <option value="{{$i}}"> ارسال از {{$i}} اینده روز کاری </option>
                            @endfor
                                </select>
                            </div>
                        <div class="col-lg-3 text-right">
                            
                            <label for="exampleFormControlSelect2" class=""> گارانتی محصول</label>
                            <select class="w-100 p-2" name="waranty" id="exampleFormCotrolSelenct2" style="border: 3px solid #ffcc33;">
                            @forelse ($waranties as $waranty)
                        <option value="{{$waranty->id}}">{{$waranty->name}}</option>
                        @empty

                        @endforelse
                            </select>
                        </div>
               
                            <div class="col-lg-3 text-right">
                            
                            <label for="exampleFormControlSelect3" class=""> رنگ محصول</label>
                            <select class="w-100 p-2" name="option" id="exampleFormCotrolSelenct3" style="border: 3px solid #ffcc33;">
                            @forelse ($options as $option)
                                            <option value="{{$option->id}}"> {{$option->title}} </option>
                                            @empty

                                            @endforelse
                            </select>
                        </div>
                            <div class="col-lg-3 text-right">
                                <label for="">قیمت</label>
                                <input type="text" name="price" placeholder="قیمت خود را وارد نمایید"  class="w-100 p-2" style="border: 3px solid #ffcc33;">
                            </div>
                            <div class="col-lg-3 text-right">
                            <label for="">موجودی</label>
                                <input type="text" name="stock"  placeholder="موجودی خود را وارد نمایید"    class="w-100 p-2" style="border: 3px solid #ffcc33;">
                            </div>  
                            <div class="col-lg-3 d-flex justify-content-center align-items-center mt-3">
                                <!-- <input type="radio" id="active">
                                <label for="active" class="mt-2 mr-2" name="gender">فعال</label>
                                <input type="radio" id="no-active" class="mr-3">
                                <label for="no-active" class="mt-2 mr-2" name="gender">غیرفعال</label> -->
                                  <input type="radio" value="1" id="html" name="is_active">
  <label for="html" class="mr-2 mt-2">فعال</label><br>
  <input type="radio" value="0" id="css" name="is_active" class="mr-2">
  <label for="css" class="mr-2 mt-2">غیر فعال</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-danger" value="ثبت">
            </div>
        </div>
    </div>
</form>
@endsection