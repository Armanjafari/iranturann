@extends('layout.master')
@section('content')
<main>
<div class="justify-content-center mt-5">
	@if ($items->isEmpty())
	<p>
		محصولی در سبد خرید موجود نمیباشد
		<a href="{{ route('product.index') }}">محصولات</a>
	</p>
	@else


	<div class="row">
		<div class="col-lg-7 bg-light mt-5 pr-0 pl-0">

			<table class="table text-center table-striped table-bordered w-100 table-basket1">
				<thead>
					<tr>
						<th>نام</th>
						<th> قیمت محصول </th>
						<th>تعداد</th>
						<th>ویرایش</th>
						<th>حذف</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($items as $item)
					<tr>
						<td>
							<a href="{{route('product.single',$item->id)}}" class="control-text d-block">

								{{mb_substr($item->product->pure->title,0,30)}}
							</a>

							<br>
							@if ($item->ordering)
							<span style="font-size: 11px">ارسال از {{$item->ordering}} روز آینده</span>
							@endif
						</td>
						<td>{{ number_format($item->price) }} تومان</td>
						<td>
							<form action="{{ route('basket.update', $item->id) }}" method="POST" class="">
								@csrf

								<select name="quantity" id="quantity" class="form-quantity">
									@for ($i = 0; $i <= $item->stock; $i++)
										<!-- TODO fix this !-->
										<option {{$item->quantity == $i ? 'selected' : ''}} value="{{$i}}">{{$i}}
										</option>
										@endfor
								</select>

						</td>
						<td><button type="submit" class="btn btn-success broz1 mr-3"> بروز رسانی </button></td>
						</form>
						<form action="{{ route('basket.update', $item->id) }}" method="POST" id="trash-from">
							@csrf
							<td>
								<select name="quantity" id="" style="display:none;">
									<option value="0"></option>
								</select>
								<a href="#"
									onclick="event.preventDefault();document.getElementById('trash-from').submit()"
									class="fas fa-trash"></a>
								{{-- <input type="submit" class="fas fa-trash" value="submit"> --}}
							</td>
						</form>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
		<div class="col-lg-5 text-right mt-5">
			@include('Product.summary')
			<a href="{{ route('basket.checkout.form') }}" class="btn mt-4  btn-primary btn-lg w-100 d-block"> ثبت و
				ادامه سفارش </a>
		</div>
	</div>
	@endif
</div>

</main>
@endsection