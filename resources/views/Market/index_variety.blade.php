@extends('Market.layout.master')
@section('content')
<main class="mt-3">
    <div class="col-lg-12 text-center">
 
       <img src="assets/img/Untitled-removebg-preview.png" alt="" class="product-img-size5 mr-auto ml-auto">
       <caption><p class="mt-3">هودی ادی داس طرح زمستانه</p></caption>
       <table class="table table-striped table-seler1">
           <thead>
             <tr>
               <th scope="col">رنگ</th>
               <th scope="col">موجودی</th>
               <th scope="col">قیمت بدون تخفیف</th>
               <th scope="col">قیمت با تخفیف </th>
               <th scope="col">ویرایش</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <th><span class="d-block rounded-circle" style="background-color: red; width: 10px; height: 10px;"></span></th>
               <td>3</td>
               <td>125,000</td>
               <td>100,000</td>
               <td><a href="" class="p-1 btn-info edit-5">ویرایش</a></td>
             </tr>
             <tr>
               <th><span class="d-block rounded-circle" style="background-color: blue; width: 10px; height: 10px;"></span></th>
               <td>5</td>
               <td>300,000</td>
               <td>250,000</td>
               <td><a href="" class="p-1 btn-info edit-5">ویرایش</a></td>
             </tr>
             <tr>
               <th><span class="d-block rounded-circle" style="background-color: green; width: 10px; height: 10px;"></span></th>
               <td>10</td>
               <td>200,000</td>
               <td>100,000</td>
               <td><a href="" class="p-1 btn-info edit-5">ویرایش</a></td>
             </tr>
           </tbody>
         </table>        
    </div>
       </main>
@endsection