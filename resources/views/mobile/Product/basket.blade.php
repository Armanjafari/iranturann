@extends('mobile.layout.master')
@section('content')
<main>
	@if ($items->isEmpty())
		<img src="{{asset('assets/mobile/img/12356- 1.png')}}" alt="" class="null-img">
	@else
		<div class="col-lg-7 col-12 bg-light mt-5 pr-0 pl-0">
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
							<a href="{{route('mobile.product.single',['market' => $market->id,'option'=>$item->id])}}" class="control-text d-block">

								{{mb_substr($item->product->pure->persian_title,0,10)}}							</a>

							<br>
							@if ($item->ordering)
							<span style="font-size: 8px !important">ارسال از {{$item->ordering}} روز آینده</span>
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
		<div class="col-lg-5  text-right mt-5" style="margin-bottom: 7em">
			@include('Product.summary')
			<a href="{{ route('mobile.basket.checkout.form',$market->id) }}" class="btn mt-4  btn-primary btn-lg w-100 d-block"> ثبت و
				ادامه سفارش </a>
		</div>

	@endif


</main>
@endsection