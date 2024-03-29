@extends('Admin.layout.master')
@section('content')
<!-- col-lg-9 مربوط به هر چی که غیر از منو هست می باشد -->
<div class="col-lg-9 mb-3">
    <!-- start Type list -->
    <div class="card-header add-product-box text-center">
        <span class="add-product"> لیست نوع </span>
    </div>
    @include("alerts.success")
    @include('alerts.errors')
    <div class="col-lg-12 mt-3">
        <div class="card p-3">
            <div class="row">
                <div class="col-lg-3 mt-2">
                    <form action="" method="post">
                    <div class="first-name">
                        <label for="">رنگ</label>
                        <input type="text" name="color" class="form-control-one p-2">
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <div class="first-name mr-4">
                        <label for="">کد رنگ</label>
                        <input type="text" name="code_color" class="form-control-one p-2">
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <div class="first-name mr-5 text-right">
                        <label for="">انتخاب</label>

                        <select name="option" class="form-control form-control-one" id="exampleFormControlSelect1">
                            <option value="1" >رنگ</option>
                            <option>سایز</option>
                        </select>
                    </div>

                </div>
                <div class="col-lg-3">
                    <input class="btn-Record text-light" type="submit" value="ثبت">
                </div>
            </div>
        </div>
    </form>
    </div>
    <!-- end Type list -->
    <!-- start table 1 -->
    <div class="col-lg-12 mt-3">
        <table class="table table-bordered table-striped text-center form-control-two">
            <thead>
                <tr>
                    <th>شماره</th>
                    <th>مقدار1</th>
                    <th>مقدار2</th>
                    <th>نوع</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        سفید
                    </td>
                    <td>
                        <p style="background-color:#f2257f; width: 20px; height: 20px;" class="mr-auto ml-auto"></p>
                    </td>
                    <td>
                        رنگ
                    </td>
                    <td><a href="#" class="a1">ویرایش</a></td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- end table 1 -->
    <!-- start Type registration -->
    <div class="row">
        <div class="col-lg-3 mt-3">
            <form action="{{ route('edit.option' , $option->id) }}" method="post">
                @csrf
            <div class="first-name mr-3">
                <label for="">نام نوع</label>
                <input type="text" value="{{ $option->name }}" name="name" class="form-control-one p-2">
            </div>
        </div>
        <div class="col-lg-3 mt-2">
            <input class="btn-Record text-light" type="submit" value="ثبت نوع">
        </div>
    </form>
        <!-- end Type registration -->
        <!-- Start table 2-->
        <div class="col-lg-12 mt-3">
            <table class="table table-bordered table-striped text-center form-control-two">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>نام نوع</th>
                        <th>ویرایش</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($options as $option)
                        <tr>
                            <td> {{ $option->id }} </td>
                            <td>
                                {{ $option->name }}
                            </td>
                            <td>
                                <a href="{{ route('show.option.edit.form', $option->id) }}" class="a1"> ویرایش </a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                    
                    <!-- end row table 2 -->

                </tbody>
            </table>

        </div>
        <!-- end table 2-->
    </div>
</div>
</div>
</div>
@endsection