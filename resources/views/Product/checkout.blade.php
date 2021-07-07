@extends('layout.master')
@section('content')
<main>
<div class="row mt-5">
<div class="col-lg-8 mt-5 text-right">
<div>
<span class="discount">اطلاعات ارسال</span>
</div>
<div class="mt-3">
<span>آدرس تحویل سفارش:</span>
</div>
<div>
<span> {{Auth::user()->address ?? 'فارس،لارستان'}}</span><br>
<span>{{Auth::user()->name}}</span>
</div>
<div>

</div>
<div class="mt-5">
<a href="" class="link-application">ویرایش آدرس</a>
</div>
<hr>
<span>نوع پرداخت خود را انتخاب کنید</span><br><br>
<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
	<form action="{{ route('basket.checkout') }}" id='checkout-formm' method="post" >
		@csrf
<a class=" active Seller3" id="nav-home-tab" data-toggle="tab" href="#nav-home2"
                                role="tab" aria-controls="nav-home" aria-selected="true">پرداخت آنلاین 
								<input type="radio" value="online" style="" id=""></a>
								<a class="Seller3 active mr-3" id="nav-profile-tab" data-toggle="tab" href="#nav-profile2"
                                role="tab" aria-controls="nav-profile2" aria-selected="false">کارت به کارت</a>
								<a class="Seller3 active mr-3" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">پرداخت حضوری</a>
							</div>
<div class="tab-content mt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home2" role="tabpanel"
                            aria-labelledby="nav-home-tab">
						</form>
<div class="contactChoice1">
<span>انتخاب درگاه</span><br>
<input type="radio" id="contactChoice1"
     name="online" value="email" checked>
    <label for="contactChoice1"><img src="{{ asset('assets/img/bank-melat-removebg-preview.png') }}" alt=""></label>
</div>
<div class="kart-to-kart text-center">
<p>شماره کارت: 6104337378510976</p>
<p>بانک ملت اسماعیل زلفیان</p>
</div>
<div class="lar1 text-center">
فقط شهر لار
</div>
</div>

</div>
</div>
</div>
<div class="row mt-5">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">
		اطلااعات
			</div>
			<div class="card-body">
				<ul class="list-group list-group-flush">
					<li class="list-group-item">   گیرنده : {{Auth::user()->name}}  </li>
					<li class="list-group-item"> آدرس : {{Auth::user()->address ?? 'فارس،لارستان'}}</li>
					<li class="list-group-item"> شماره موبایل : {{Auth::user()->phone_number}}</li>
				</ul>
			</div>
		</div>		
	</div>
	<div class="col-md-4">
		@include('Product.summary')
		<a onclick="event.preventDefault();document.getElementById('checkout-form').submit()" class="btn btn-primary d-block w-100"> پرداخت </a>
	</div>
</div>
<div class="row">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header text-center">
                روش پرداخت
            </div>
			<div class="card-body">
			<form action="{{ route('basket.checkout') }}" id='checkout-form' method="post" >
					@csrf
					<ul class="list-group list-group-flush text-right">
						<li class="list-group-item text-right">
							<div class="custom-control custom-radio custom-control-inline">
	
								<input type="radio" id="online" value="online" name="method" class="custom-control-input" checked>
								
								<label class="custom-control-label" for="online">
									پرداخت آنلاین
								</label>
							</div>

							<select name='gateway'  class="custom-select col-md-4  custom-control-inline form-control6">
								<option value="mellat"> ملت </option>
								<option value="saman"> سامان </option>
							</select>

							<p class='text-muted small text-right mt-3'>
							در این روش شما میتونید درب منزل خود مبلغ را پرداخت نمایید
							</p>
						</li>

						<li class="list-group-item">
						
							<div class="custom-control custom-radio custom-control-inline">
	
	<input type="radio" id="cash" value="cash" name="method" class="custom-control-input" checked>
	
	<label class="custom-control-label" for="cash">
		پرداخت نقدی
	</label>
</div>
							<p class='text-muted small text-right mt-3'>
							در این روش شما میتونید درب منزل خود مبلغ را پرداخت نمایید
							</p>

						</li>
						<li class="list-group-item">
							<!-- <div class="custom-control custom-radio">
								<input type="radio" id="cart" value="cart" name="method" class="custom-control-input">
								<label class="custom-control-label" for="cart">
									کارت به کارت 
								</label>
							</div> -->
							<div class="custom-control custom-radio custom-control-inline">
	
	<input type="radio" id="cart" value="cart" name="method" class="custom-control-input" checked>
	
	<label class="custom-control-label" for="cart">
		کارت به کارت
	</label>
</div>
							<p class='text-muted small text-right mt-3'>
							لطفا مبلغ را به شماره کارت ۱۲۳ واریز نمایدد و کد پیگیری را به همکاران ما اطلاع دهید
							</p>

						</li>
					</ul>
				</form>
				@include('alerts.errors')
			</div>
		</div>

	</div>
</div>
</main>
@endsection

