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

			</table>
		</div>
	</div>
</div>

