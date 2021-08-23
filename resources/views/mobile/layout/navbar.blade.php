@inject('basket', 'App\Support\Basket\Basket')
<!--start navbar menu-->
<header>
        <nav class="navigation text-right">
                <div class="container">
                        <!-- Menu Level 1 -->
                    <ul class="menu-level-1">
                    @forelse ($market->categories as $category)
                        <li class="menu-list-1">
                            <a href="#" class="list-item">
                                <img src="{{asset('assets/img/download (1).png')}}" alt="">
                                <span>{{$category->persian_name}}</span>
                                <img class="item-icon" src="{{asset('assets/img/download.png')}}" alt=""></a>
                              </li>
                              
                    @empty 

                     @endforelse
              


                    <!-- End Menu Level 2 -->
                     
                  
           
                              
                            
                                <a href="{{route('mobile.basket.index',$market->id)}}" class="svg-shopp  mr-auto ml-3 mt-2">
            
                                <span class="badge badge-danger position-absolute text-light mt-0 mr-0">{{ $basket->itemCount() }}</span> <img src="{{ asset('assets/img/svg element/Icon awesome-shopping-cart.svg') }}" alt="" class="m-1"></a>
                            @guest
                         
                                    
                                    <a class="text-center btn-logo" href="{{ route('mobile.login_with_code',$market->id) }}"><img src="{{asset('assets/img/svg element/ورود.svg')}}" alt="" class="pt-1 pl-1">ورود/ثبت نام</a>
                            @endguest
                            @auth       
                            <div class="mt-2 fa-user5"> <a href="{{route('mobile.show.profile',$market->id)}}" class=""><i class="fas fa-user fa-user1 p-3"></i>
                            </a>
                            <div class="profile-box p-3">
                           <a href="">  <i class="fas fa-user-circle ml-2"></i> {{auth()->user()->name}} </a>
                           <hr>
                           <a href="{{route('mobile.show.profile',$market->id)}}">  <i class="fas fa-user fa-user2 ml-2"></i>مشاهده حساب کاربری</a>
                           <hr>
                           <a href="{{route('mobile.user.orders.index',$market->id)}}">  <i class="fas fa-scroll fa-scroll1 ml-2"></i>سفارش های من</a>
                           <hr>
                           <a href="{{ route('mobile.logout',$market->id) }}">  <i class="fas fa-sign-out-alt fa-sign-out-alt1 ml-2"></i>خروج از حساب کاربری</a>
                            </div>
                            </div>
                            @endauth
                    </ul><!-- End Menu Level 1 --> 
                </div>
            </nav>
            <!--end navbar menu-->
       
        <!--start mobile nav-->
        <div class="mobile-nav">
            <a href="#" class="toggle-btn" id="toggle"><span></span></a>
           
            <a href="{{route('mobile.basket.index',$market->id)}}" class="svg-shopp ml-3 mr-auto  mt-2">
                <span class="badge badge-danger position-absolute text-light mt-0 mr-0">{{ $basket->itemCount() }}</span> <img src="{{ asset('assets/img/svg element/Icon awesome-shopping-cart.svg') }}" alt="" class="m-1"></a>
            {{-- <a href="">
            <img src="assets/img/svg element/Icon awesome-shopping-cart.svg" alt="" class="svg-shopp ml-3">
            </a> --}}
            @guest
          <a href="{{ route('mobile.login',$market->id) }}" class="fa-user1"> <img src="assets/img/svg element/ورود.svg" alt="" style="margin-left:3px;">ورود</a>  
            @endguest
           @auth
           <div class="mt-2 mr-3 fa-user5"> <a href="{{ route('mobile.show.profile',$market->id) }}" class=""><i class="fas fa-user fa-user1 p-3"></i>
           </a>
           <div class="profile-box p-3">
        </div>

          {{-- <a href="{{ route('logout') }}" class="btn-logo1">خروج</a>   --}}
           @endauth
            
        <!--end mobile nav-->
        </header>
        <!-- 
{{-- 
        </a>
                @guest
                <button type="button" class="btn-logo">
                        <i class="far fa-user"></i>
                        <a class="text-center" href="{{ route('login') }}">ورود به حساب کاربری</a>
                    </button> 
                @endguest
                @auth                    
                <button type="button" class="btn-logo">
                    <i class="far fa-user"></i>
                    <a class="text-center" href="{{ route('logout') }}">خروج از حساب کاربری</a>
                </button>
                @endauth
        --> --}}