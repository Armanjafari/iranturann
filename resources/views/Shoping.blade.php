@extends('layout.master')
@section('content')
    
<!--start main-->
<main>
<div class="row">
        <div class="card-header text-center mt-5 card-header-product w-100 pt-5 pb-5"><a class="new-product"> {{ $centerName }} </a></div>
    <div class="owl-carousel owl-theme mt-5" id="owl-mobile5">
        @forelse ($users as $item)
        <div class="item">
            <div class="card card-shopping2">
                <div class="card-body text-center">
                    <div class="col-lg-8 ml-auto mr-auto col-8"><img src="{{asset('assets/img/راهنمای-کامل-راه-اندازی-بوتیک-لباس3.jpg')}}" alt="" class="rounded-circle"></div>
                    <form action="">
                        <div class="rating"><input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                    </form>
                     <caption><a href="#"> {{$item->name}} </a></caption><br>
                    <div class="mt-2">
                     <span>طبقه اول ، پلاک01</span>
                </div>
                <div class="mt-1">
                        <a href="#" class="download-app">لینک دانلود اپلیکیشن بیت باکس</a>
                </div>
                </div>
            </div>
        </div>
        @empty
            فروشنده ای برای این مرکز وجود ندارد
        @endforelse
    </div>
    </div>
</main>
@endsection
