@inject('cost' , 'App\Support\Cost\Contracts\CostInterface')
<div class="card bg-light">
	<div class="card-body">
		<h4> پرداخت </h4>
		<hr>
		<div class="well">
			<table class='table'>
				
				@foreach ($cost->getSummary() as $description => $price)
				<tr>
					<td> {{ $description }} </td>
					<td> {{number_format($price)}} تومان </td>
				</tr>
			@endforeach
			<tr>
				<td> مبلغ قابل پرداخت </td>
				<td> {{number_format($cost->getTotalCosts() )}} تومان </td>
			</tr>
			@if(session()->has('coupon'))
			<form action=" {{ route('coupons.remove') }}" method="get">
				@csrf
				<div class="input-group">
					<span >{{session()->get('coupon')->code}}</span>
					<span class="input-group-btn">
						<button class="btn btn-primary btn-sm  ml-3" type="submit"> حذف کد تخفیف </button>
					</span>
				</div>
			</form>
			@else
			<form action="{{route('coupons.store')}}"  method="post">
				@csrf
				<div class="input-group">
					<input id='coupon' name='coupon' type="text" class="form-control p-2">
				
						<button id='coupon-apply' class="btn btn-primary mr-3 mt-3 mt-sm-0" type="submit"> اعمال کد تخفیف </button>
					
				</div>
			</form>
			@endif
			</table>
		</div>
	</div>
</div>

