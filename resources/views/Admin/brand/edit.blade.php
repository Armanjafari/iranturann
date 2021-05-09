@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
  <div class="card-header add-product-box text-center">
    <span class="add-product"> لیست برند </span>
  </div>
  @include("alerts.success")
  @include('alerts.errors')
  <div class="col-lg-12 mt-3">
    {{-- // TODO refactoring code becuase duplicating two view --}}
    <form action="{{ route('edit.brand', $brand->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="card p-3">
        <div class="row">
          <div class="col-lg-3 mt-2">
            <div class="first-name">
              <label for="">اسم فارسی برند</label>
              <input type="text" name="persian_name" value="{{ $brand->persian_name }}" class="form-control-one p-2">
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <div class="first-name mr-4">
              <label for="">اسم انگلیسی برند</label>
              <input type="text" name="name" value="{{ $brand->name }} " class="form-control-one p-2">
            </div>
          </div>
          <div class="col-lg-3 mt-2">
            <label for="files" class="apload-img1">آپلود عکس</label>
            <input id="files" name="image" style="display: none;" type="file">
          </div>
          <div class="col-lg-3">
            <input class="btn-Record text-light" type="submit" value="ثبت">
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="col-lg-12 mt-3">
    <table class="table table-bordered table-striped text-center form-control-two">
      <thead>
        <tr>
          <th>شماره</th>
          <th>نام فارسی برند</th>
          <th>نام انگلیسی برند</th>
          <th>عکس برند</th>
          <th>عملیات</th>
          <th> حذف </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($brands as $brand)
        <tr>
          <td>{{ $brand->id }}</td>
          <td>
            {{$brand->persian_name}}
          </td>
          <td>
            {{$brand->name}}
          </td>
          <td>
            <img src="{{ $brand->image->address ?? '' }}" style="width:50px;height:50px;" alt="logo">

          </td>
          <td><a href="{{ route('show.brand.edit.form' , $brand->id) }}" class="a1 btn btn-light">ویرایش</a></td>
          <td><a href="{{ route('delete.brand',$brand->id) }}"> حذف </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
@endsection