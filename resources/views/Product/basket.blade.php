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
                                <form action="{{ route('basket.update', $item->id) }}" method="POST" class="form-inline">
									@csrf
									
									<select name="quantity" id="quantity" class="form-control input-sm mr-sm-2">
										@for ($i = 0; $i <= $item->stock; $i++)
										 <!-- TODO fix this !-->
									<option  {{$item->quantity == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}</option>
										@endfor
									</select>
									<button type="submit" class="btn btn-light btn-sm"> بروز رسانی </button>
								</form>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-md-4">
            @include('Product.summary')
		<a href="{{ route('basket.checkout.form') }}" class="btn mt-4  btn-primary btn-lg w-100 d-block"> ثبت و ادامه سفارش </a>
		</div>
	</div>
	@endif
</div>


@endsection

