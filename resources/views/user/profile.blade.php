@extends('layout.master')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
        @include('user.mini_nav')
            <div class="col-lg-9 mt-5">
                <div class="information-box1">
                    <div class="card-body p-1 information-box2">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-start">
                                <span class="Personal-Information">اطلاعات شخصی</span>
                            </div>

                            <div class="col-lg-6 mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                        <div>
                                            <span class="name-last">نام و نام خانوادگی :</span>
                                            <span class="name1 mr-3">{{$user->name}}</span>
                                        </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                    <div>
                                        <span class="name-last">شماره موبایل :</span>
                                        <span class="name1 mr-3">{{$user->phone_number}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                    <div>
                                        <span class="name-last">استان :</span>
                                        <span class="name1 mr-3">{{$user->shipings->city->province->name ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                    <div>
                                        <span class="name-last">شهر :</span>
                                        <span class="name1 mr-3">{{$user->shipings->city->name ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                    <div>
                                        <span class="name-last">آدرس :</span>
                                        <span class="name1 mr-3">{{$user->shipings->address ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6  mt-5">
                                <div class="card p-4 text-right border-0 box-card">
                                    <div>
                                        <span class="name-last">کد پستی :</span>
                                        <span class="name1 mr-3">{{$user->shipings->postal_code ?? ''}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mt-5">
                                <a href="{{route('edit.profile.form')}}" class="btn-Record"> ویرایش </a>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <hr>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection