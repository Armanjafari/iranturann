@extends('mobile.layout.master')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
         <ul class="text-right pr-0">
             @forelse ($market->categories as $category)
         <a href="{{route('mobile.category', ['market' => $market->id, 'category' => $category->id])}}" class="link-category"><li class="btn-category mt-3">{{mb_substr($category->persian_name,0,13)}}</li> </a>
             @empty
                 <p> دسته بندی وجود ندارد </p>
             @endforelse
         </ul>
  </div>
  </div>  
  </div>
@endsection