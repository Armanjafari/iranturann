@extends('layout.master')
@section('content')
<div class="justify-content-center mt-5">


	@if ($items->isEmpty())
	<p>
		محصولی در سبد خرید موجود نمیباشد 
        <a href={{ route('product.index') }}>محصولات</a>
	</p>
	@else


	<div class="row">
		<div class="col-md-7 card bg-light mr-3">
			<div class="card-body well">
				<table class="table ">
					<thead>
						<tr>
							<th>نام</th>
							<th> قیمت محصول </th>
							<th>تعداد</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($items as $item)
							<tr>
							<td> {{$item->title}} </td>
							<td>{{ number_format($item->price) }} تومان</td>
							<td>
                                {{ $item->quantity }}
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-4">
            @include('Product.summary')
		<a href="#" class="btn mt-4  btn-primary btn-lg w-100 d-block"> ثبت و ادامه سفارش </a>
		</div>
	</div>
	@endif
</div>


@endsection

