@extends('layout.master')
@section('content')
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-9">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{route('mobile.edit.profile',$market->id)}}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-lg-6 mt-5">
                                    <div class="first-name text-right">
                                        <label class="label">نام ونام خانوادگی</label>
                                        <input type="text" name="name" class="form-control p-3" value="{{$user->name}}">
                                    </div>
                            </div>

                            <div class="col-lg-6 mt-5">
                                <div class="first-name text-right">
                                    <label class="label">آدرس</label>
                                    <textarea class="form-control p-3" name="address" rows="8">{{$user->shipings->address}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-5">
                                <div class="first-name text-right">
                                    <label class="label">کد پستی</label>
                                    <input type="text" class="form-control p-3" name="postal_code" value="{{$user->shipings->postal_code}}">
                                </div>
                            </div>
                            <div class="col-lg-2 mt-5">
                                <div class="first-name text-right">
                                    <label for="">استان</label>
                                    <select name="province" id="" class="form-control">
                                        <option value="{{$user->shipings->city->province->id}}">
                                            {{$user->shipings->city->province->name}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 mt-5">
                                <div class="first-name text-right">
                                    <label for="">شهر</label>
                                    <select name="city" id="" class="form-control">
                                        <option value="{{$user->shipings->city->id}}">
                                            {{$user->shipings->city->name}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center">
                                <input type="submit" value="ثبت" class="btn-Record mt-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection