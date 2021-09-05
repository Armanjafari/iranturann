@inject('basket', 'App\Support\Basket\Basket')

<!-- start menu box -->
<div class="content bg-light">
    <ul class="pr-0 mb-0">
        <div class="row">
            <div class="col-2 text-center box-menu">
                <a href="{{route('mobile.show.market',$market->id)}}"> <i class="fas fa-home fas1 {{url()->current() == route('mobile.show.market',$market->id) ? 'active-menu' : '' }}"><p class="mt-2">خانه</p></i>
                    
                </a>
            </div>
            <div class="col-4 text-center box-menu">
                <a href="{{route('mobile.category.list',$market->id)}}" class=""> <i class="fas fa-list-alt fas1 {{url()->current() == route('mobile.category.list',$market->id) ? 'active-menu' : '' }}"> <p class="mt-2">دسته بندی</p></i>

                </a>
            </div>
            
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.basket.index',$market->id)}}"><i class="fas fa-shopping-cart fas1 {{url()->current() == route('mobile.basket.index',$market->id) ? 'active-menu' : '' }}"> <p class="mt-2">سبد خرید</p></i>
                   
                </a>
            </div>
            @auth
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.show.profile',$market->id)}}"> <i class="fas fa-user fas1  {{url()->current() == route('mobile.show.profile',$market->id) ? 'active-menu' : '' }}"><p class="mt-2">پروفایل</p></i>
                    
                </a>
            </div>
            @endauth
            @guest
            <div class="col-3 text-center box-menu">
                <a href="{{ route('mobile.login',$market->id) }}"> <i class="fas fa-user fas1 {{url()->current() == route('mobile.login',$market->id) ? 'active-menu' : '' }} "><p class="mt-2">ورود/ثبت</p></i>
                </a>
            </div>
            @endguest
        </div>
    </ul>
</div>
<!-- end menu box -->