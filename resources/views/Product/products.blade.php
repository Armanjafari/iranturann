@extends('layout.master')
@section('content')

<!--start main-->
<main>
	<div class="col-lg-12">
		<div class="mt-5">
			<div class="col-lg-12">
				<div class="card position-absolute mt-5 text-center" style="left: 10px; z-index:1;">
					<div class="row">
						<a href="#"> <img src="" alt="" class="shabak"></a>
						<a href="#"> <img src="{{asset('assets/img/svg element/insta.svg')}}" alt="" class="shabak"></a>
						<a href="#"> <img src="{{asset('assets/img/svg element/insta.svg')}}" alt="" class="shabak"></a>
						<a href="#"> <img src="{{asset('assets/img/svg element/wat.svg')}}" alt="" class="shabak"></a>
					</div>
				</div>
			</div>
		<img src="https://www.uplooder.net/img/image/87/7bd54b1fa0867c2979143bf61e0d0395/Whal.jpg" alt="" width="100%"
            style="height: 20em; opacity:0.7; position:relative">
    </div>
    <div class="row">
		</div>
		<div class="col-lg-12 ml-auto mr-auto col-8">
			<div class="card-header text-center mt-5 card-header-product w-100 pt-5 pb-5"><a class="new-product">
					WAHL </a></div>
		</div>
			<div class="row">
				@forelse ($products as $product)
				<div class="col-lg-3 mt-5">
					<div class="card text-center">
						<img class="card-img-top"
							src="{{ $product->pure->images->first()->address }}"
							alt="هپل">
						<div class="card-body">
							<h5 class="card-title">{{ $product->pure->title }}</h5>
							<p class="card-text">{{ $product->pure->price . ' تومان ' }}</p>
							<a href="{{ route('product.single' , $product->fulls->first()->id) ?? '#' }}" class="btn btn-primary pl-3 pr-3 pt-2 pb-2"> صفحه محصول </a>
						</div>
					</div>
				</div>
				@empty
					
				@endforelse
				
			</div>
		
	</div>
</main>
@endsection
