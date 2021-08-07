@extends('Market.layout.master')
@section('content')
<form action="{{ route('market.variety.edit' , $full->id) }}" method="post">
    @csrf
    <select name="product" style="display:none;" class="form-control" >
        <option value="{{$product}}"></option>
    </select>
    <div class="col-lg-12">
        <div class="card border-dark-d mb-3">
            <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="card form-control-one p-3">
                        <div class="row">
                            <div class="col-lg-3 text-right">
                            
                                <label for="exampleFormControlSelect2" class=""> وضعیت ارسال</label>
                                <select class="w-100 p-2" name="ordering" id="exampleFormCotrolSelenct2" style="border: 3px solid #ffcc33;">
                                    <option value="0"> آماده ارسال </option>
                            @for ($i = 1; $i < 30; $i++)
                                <option value="{{$i}}" {{$full->ordering == $i ? 'selected' : ''}}> ارسال از {{$i}}  روز کاری </option>
                            @endfor
                                </select>
                            </div>
                        <div class="col-lg-3 text-right">
                            
                            <label for="exampleFormControlSelect2" class=""> گارانتی محصول</label>
                            <select class="w-100 p-2" name="waranty" id="exampleFormCotrolSelenct2" style="border: 3px solid #ffcc33;">
                            @forelse ($waranties as $waranty)
                        <option value="{{$waranty->id}}" {{$full->waranty_id == $waranty->id ? 'selected' : ''}}>{{$waranty->name}}</option>
                        @empty

                        @endforelse
                            </select>
                        </div>
               
                            <div class="col-lg-3 text-right">
                            
                            <label for="exampleFormControlSelect3" class=""> رنگ محصول</label>
                            <select class="w-100 p-2" name="option" id="exampleFormCotrolSelenct3" style="border: 3px solid #ffcc33;">
                            @forelse ($options as $option)
                                            <option  value="{{$option->id}}" {{$full->color_id == $option->id ? 'selected' : ''}}> {{$option->title}} </option>
                                            @empty

                                            @endforelse
                            </select>
                        </div>
                            <div class="col-lg-3 text-right">
                                <label for=""> قیمت بدون تخفیف </label>
                                <input type="text" value="{{$full->show_price}}" name="show_price" placeholder="قیمت بدون تخفیف خود را وارد نمایید"  class="w-100 p-2" style="border: 3px solid #ffcc33;">
                            </div>
                            <div class="col-lg-3 text-right">
                                <label for="">قیمت با تخفیف</label>
                                <input type="text" value="{{$full->price}}" name="price" placeholder="قیمت خود را وارد نمایید"  class="w-100 p-2" style="border: 3px solid #ffcc33;">
                            </div>
                            <div class="col-lg-3 text-right">
                            <label for="">موجودی</label>
                                <input type="text" name="stock" value="{{$full->stock}}"  placeholder="موجودی خود را وارد نمایید"    class="w-100 p-2" style="border: 3px solid #ffcc33;">
                            </div>  
                            <div class="col-lg-3 d-flex justify-content-center align-items-center mt-3">
                                  <input type="radio" {{$full->is_active == '1' ? 'checked' : ''}} value="1" id="html" name="is_active" checked>
  <label for="html" class="mr-2 mt-2">فروش</label><br>
  <input type="radio" {{$full->is_active == '0' ? 'checked' : ''}} value="0" id="css" name="is_active" class="mr-2">
  <label for="css" class="mr-2 mt-2">توقف فروش</label><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-5">
                <input type="submit" class="btn btn-danger" value="ثبت">
            </div>
        </div><br><br><br><br>   
    </div>
</form>
@endsection