@inject('basket', 'App\Support\Basket\Basket')

<!-- start menu box -->
<div class="content bg-light">
    <ul class="pr-0 mb-0">
        <div class="row">
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.show.market',$market->id)}}"> <i class="fas fa-home fas1"></i>
                    <p>خانه</p>
                </a>
            </div>
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.category.list',$market->id)}}"> <i class="fas fa-list-alt fas1"></i>
                    <p>دسته بندی</p>
                </a>
            </div>
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.basket.index',$market->id)}}"><i class="fas fa-shopping-cart fas1"></i>
                    <p>سبد خرید</p>
                </a>
            </div>
            @auth
            <div class="col-3 text-center box-menu">
                <a href="{{route('mobile.show.profile',$market->id)}}"> <i class="fas fa-user fas1"></i>
                    <p>پروفایل</p>
                </a>
            </div>
            @endauth
            @guest
            <div class="col-3 text-center box-menu">
                <a href="{{ route('mobile.login',$market->id) }}"> <i class="fas fa-user fas1"></i>
                    <p>ورود/ثبت نام</p>
                </a>
            </div>
            @endguest
        </div>
    </ul>
</div>
<!-- end menu box -->