@extends('Market.layout.master')
@section('content')
<form action="{{ route('market.variety.add') }}" method="post">
    @csrf
    <select name="product" style="visibility: hidden;" class="form-control" >
        <option value="{{$product}}"></option>
    </select>
    <div class="col-lg-12 mt-3">
        <div class="card border-dark-d mb-3">
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <select name="waranty" class="form-control" id="">
                        @forelse ($waranties as $waranty) 
                        <option value="{{$waranty->id}} {{$full->waranty->id == $waranty->id ? 'selected' : ''}} ">{{$waranty->name}}</option>
                        @empty

                        @endforelse
                    </select>
                </div>
                <div class="col-lg-9 mt-3">
                    <div class="card form-control-one p-3">
                        <div class="row">
                            <div class="col-lg-3 text-right">
                                <div class="form-group">
                                    <div class="select">
                                        <label for="exampleFormControlSelect1">رنگ محصول خود را انتخاب کنید</label>
                                        <select name="option" class="form-control" id="exampleFormControlSelect1">
                                            @forelse ($options as $option)
                                            <option {{$full->colors->id == $option->id ? 'selected' : ''}} value="{{$option->id}}"> {{$option->title}} </option>
                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 align-items-end d-flex mb-3">
                                <input type="text" name="price" class="form-control" placeholder="قیمت">
                            </div>
                            <div class="col-lg-3 align-items-end d-flex mb-3">
                                <input type="text" name="stock" class="form-control" placeholder="موجودی">
                            </div>
                            <div class="col-lg-3 d-flex justify-content-center align-items-center mt-3">
                                <input type="radio" id="active">
                                <label for="active" class="mt-2 mr-2" name="gender">فعال</label>
                                <input type="radio" id="no-active" class="mr-3">
                                <label for="no-active" class="mt-2 mr-2" name="gender">غیرفعال</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5 mb-5">
                <input type="submit" class="btn btn-danger" value="ثبت">
            </div>
        </div>
    </div>
</form>
@endsection