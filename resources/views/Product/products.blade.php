@extends('layout.master')
@section('content')
@if (session('payment'))
<div class = "row alert alert-success">
   <ul>
      {{session('payment')}}
   </ul>
</div>
@endif
<div class="row justify-content-center">
	<div class="col-md-6 mt-5">
	</div>
	<div class="card-body">
		<div class="row mb-5">
			@foreach ($products as $product)
				<div class="col-md-4 mb-5 ">
				<div class="card" style="width: 18rem;">
				<img class="card-img-top" src="{{$product->image}}" alt="هپل">
					<div class="card-body">
					<h5 class="card-title">{{$product->title}}</h5>
						<p class="card-text"> {{$product->description}} </p>
					<a href="{{ route('basket.add', $product->id) }}" class="btn btn-primary">اضافه به سبد خرید</a>
					</div>
				</div>
			</div>
			@endforeach	
		</div>
	</div>
</div>
@endsection
