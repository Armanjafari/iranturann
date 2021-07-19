@extends('Market.layout.master')
@section('content')
<main class="mt-3">
    <div class="col-lg-12 text-center">
 
       <img src="assets/img/Untitled-removebg-preview.png" alt="" class="product-img-size5 mr-auto ml-auto">
       <caption><p class="mt-3"> {{$product->pure->persian_title}} </p></caption>
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
            @forelse ($product->fulls as $full)
            <tr class="text-center">
              <td class=""><div class=" rounded-circle mr-auto ml-auto" style="background-color:{{$full->colors->value}}; width: 10px; height: 10px;"></div><span class="">{{$full->colors->title}}</span></td>
              <td>{{$full->stock}}</td>
              <td>{{number_format($full->show_price)}}</td>
              <td>{{number_format($full->price)}} </td>
              <td><a href="{{route('market.variety.edit.form', $full->id)}}" class="p-1 btn-info edit-5">ویرایش</a></td>
            </tr>
            @empty
              
            @endforelse
           </tbody>
         </table>        
    </div>
       </main>
@endsection