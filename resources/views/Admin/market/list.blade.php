@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9 mb-3">
  <div class="card-header add-product-box text-center">
    <span class="add-product"> لیست فروشندگان </span>
  </div>
  <div class="col-lg-12 mt-3">
    <table class="table table-bordered table-striped text-center form-control-two">
      <thead>
        <tr>
          <th>نام و نام خانوادگی</th>
          <th>نام فروشگاه</th>
          <th>کد</th>
          <th>آدرس</th>
          <th>عملیات</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>انسیه سوری</td>
          <td>بهار</td>
          <td>123A</td>
          <td>لار،فارس</td>

          <td><a class="btn-Record1">ویرایش</a></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection