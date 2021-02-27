@inject('basket' , 'App\Support\Basket\Basket')
<div class="card bg-light">
	<div class="card-body">
		<h4> پرداخت </h4>
		<hr>
		<div class="well">
			<table class='table'>
				<tr>
					<td> مبلغ کل </td>
					<td> {{number_format($basket->subTotal())}} تومان </td>
				</tr>
				<tr>
					<td> هزینه حمل </td>
					<td> {{number_format(10000)}} تومان </td>
				</tr>
				<tr>
					<td> مبلغ قابل پرداخت </td>
					<td> {{number_format($basket->subTotal() + 10000 )}} تومان </td>
				</tr>
			</table>
		</div>
	</div>
</div>

