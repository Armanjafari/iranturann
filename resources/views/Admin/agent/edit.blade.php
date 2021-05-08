@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
    <!-- Start Title Page -->
    <div class="card-header add-product-box text-center">
        <span class="add-product"> مدیریت نمایندگان </span>
    </div>
    @include('alerts.errors')
    @include('alerts.success')
    <!-- End Title Page -->


    <!-- Start Register Agent Form -->
    <div class="card mt-3 ">
        <div class="card-body text-right">
            <form action="{{ route('edit.agent', $agent->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="first-name">
                            <label class="label">نام ونام خانوادگی </label>
                            <input type="text" name='name' value="{{ $agent->user->name }}"
                                class="form-control p-3 form-control-one"
                                placeholder="نام و نام خانوادگی خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>ایمیل</label>
                            <input type="text" name='email' value="{{ $agent->user->email }}"
                                class="form-control p-3 form-control-one" placeholder="ایمیل خودرا وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>اسلاگ</label>
                            <input type="text" name='slug' value="{{ $agent->slug }}"
                                class="form-control p-3 form-control-one" placeholder="ایمیل خودرا وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="first-name">
                            <label>اینستاگرام</label>
                            <input type="text" name='instagram' value="{{ $agent->instagram }}"
                                class="form-control p-3 form-control-one" placeholder="ایمیل خودرا وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="card form-control-one">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-size: 1.1em;"> استان و
                                                شهر</label>
                                            <select class="form-control" name='city_id' id="exampleFormControlSelect1">
                                                @forelse ($cities as $city)
                                                <option {{$agent->city_id == $city->id ? 'selected' : ''}}
                                                    value="{{$city->id}}">
                                                    {{$city->name .' - '. $city->province->name}} </option>
                                                @empty

                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>آدرس</label>
                            <input type="text" name='address' value="{{ $agent->user->shipings->address }}"
                                class="form-control p-3 form-control-one" placeholder="آدرس خودرا وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>کدپستی</label>
                            <input type="text" name='postal_code' value="{{ $agent->user->shipings->postal_code }}"
                                class="form-control p-3 form-control-one" placeholder="کدپستی خودرا وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>آدرس محل کار</label>
                            <input type="text" name='address2' value="{{ $agent->user->shipings->work_address }}"
                                class="form-control p-3 form-control-one" placeholder="آدرس محل کار خود را وارد نمایید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>تلفن ثابت</label>
                            <input type="text" name="phone_number2" value="{{ $agent->user->shipings->work_phone }}"
                                class="form-control p-3 form-control-one" placeholder="تلفن ثابت خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5">
                        <div class="first-name">
                            <label>تلفن همراه</label>
                            <input type="text" name="phone_number" value="{{ $agent->user->phone_number }}"
                                class="form-control p-3 form-control-one" placeholder="تلفن همراه خود را وارد کنید">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4-5"></div>

                    <div class="col-lg-6 mt-4-5">
                        <div class="col-lg-6 ">
                            <label for="files" class="">آپلود مدارک 1 </label>
                            {{-- // TODO cannot upload two image  --}}
                            <input id="files" name='image' value="{{ old('image') }}" type="file">
                        </div>
                        <div class="col-lg-6 ">
                            <label for="files" class="">آپلود مدارک 2 </label>
                            <input id="files" name='image2' value="{{ old('image2') }}" type="file">
                        </div>
                    </div>
                </div>
        </div>

        <div class="text-center mt-1 mb-2">
            <input type="submit" value="ثبت" class="btn-Record">
        </div>
        </form>
        <!-- End Register Agent Form -->


        <!-- Start Agent Table -->
        <div class="col-lg-12 mt-3">
            <table class="table table-bordered table-striped text-center form-control-two mt-5">
                <thead>
                    <tr>
                        <th>نام و نام خانوادگی</th>
                        <th>شماره موبایل</th>
                        <th>تلفن ثابت</th>
                        <th>استان و شهر</th>
                        <th>مدارک 1</th>
                        <th>مدارک 2</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($agents as $agent)
                    <tr>
                        <td> {{$agent->user->name}} </td>
                        <td>{{$agent->user->phone_number}}</td>
                        <td>{{$agent->user->email}}</td>
                        <td> {{$agent->user->address}} </td>
                        <td><img class="w-100 h-100" src="{{$agent->images[0]->address ?? ''}}" alt=""></td>
                        <td><img class="w-100 h-100" src="{{$agent->images[1]->address ?? ''}}" alt=""></td>
                        <td><a href=" {{ route('show.agent.edit.form' , $agent->id) }} ">ویرایش</a></td>
                        <td><a href="{{ route('delete.agent',$agent->id) }}">حذف</a></td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection