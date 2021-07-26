<div class="col-lg-3">
    <div class="profile-box-order p-3">
        <a href=""><i class="fas fa-user-circle ml-2" aria-hidden="true"></i>{{auth()->user()->name}}</a>
        <hr>
        <a href="{{route('mobile.show.profile',$market->id)}}"> <i class="fas fa-user fa-user2 ml-2" aria-hidden="true"></i> مشاهده و ویراش حساب کاربری </a>
        <hr>
        <a href="{{route('mobile.user.orders.index',$market->id)}}"> <i class="fas fa-scroll fa-scroll1 ml-2"
                aria-hidden="true"></i>سفارش های من</a>
        <hr>
        <a href="{{route('mobile.logout',$market->id)}}"> <i class="fas fa-sign-out-alt fa-sign-out-alt1 ml-2"
                aria-hidden="true"></i>خروج از حساب کاربری</a>
    </div>
</div>