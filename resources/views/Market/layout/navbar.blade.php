<div class="content bg-light">
    <ul class="pr-0 mb-0">
<div class="row"> 
  {{-- savesubcat() --}}
<div class="col-2 text-center pr-3 pl-3 "><a  href="{{route('dashboard.form')}}" class="{{URL::full() == route('dashboard.form') ? 'active4' : ''}}" onclick=''><i class="fas fa-tachometer-alt"></i>پیشخوان</a></div>
<div class="col-2 text-center pr-3 pl-3"><a href="{{route('owner.customers')}}" class="{{URL::full() == route('owner.customers') ? 'active4' : ''}}"><i class="fas fa-user"></i>مشتریان</a></div>
<div class="col-2 text-center pr-3 pl-3 "> <a href="{{ route('market.index') }}" class="{{URL::full() == route('market.index') ? 'active4' : ''}}"><i class="fas fa-shopping-bag "></i>محصولات</a></div>
<div class="col-2 text-center pr-4 pl-4 "><a href="{{route('market.add.product.form')}}" class="{{URL::full() == route('market.add.product.form') ? 'active4' : ''}}"> <i class="fas fa-store"></i> فروشگاه</a></div>
<div class="col-2 text-center pr-4 pl-4 "> <a href="{{ route('orders.index') }}" class="{{URL::full() == route('orders.index') ? 'active4' : ''}}"><i class="fas fa-user  "></i>سفارشات</a></div>
<div class="col-2 text-center pr-4 pl-4 "><a href="{{ route('financial.index') }}" class="{{URL::full() == route('financial.index') ? 'active4' : ''}}"><i class="fas fa-coins "></i>مالی </a></div>
</div> 
</ul>
  </div>