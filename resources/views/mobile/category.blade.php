@extends('mobile.layout.master')
@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
         <ul class="text-right pr-0">
             @forelse ($market->categories as $category)
         <a href="" class="link-category"><li class="btn-category mt-3">{{$category->persian_name}}</li> </a>
             @empty
                 <p> دسته بندی وجود ندارد </p>
             @endforelse
         </ul>
  </div>
  </div>  
  </div>
  
@endsection