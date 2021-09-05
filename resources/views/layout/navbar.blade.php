@inject('basket', 'App\Support\Basket\Basket')
<!--start navbar menu-->
<header>
        <nav class="navigation text-right">
            <div class="container">
                <ul class="menu-level-1">
                    <!-- Menu Level 1 -->
                    <a href="{{route('index')}}">
                    <img src="{{asset('assets/img/001.svg')}}" alt="" class="img-thumbnail">
                    </a>
                    <li class="menu-list-1">
                        <a href="#" class="list-item">
                            <img src="assets/img/download (1).png" alt="">
                            <span>کالای دیجیتال</span>
                            <img class="item-icon" src="assets/img/download.png" alt=""></a>
                        <ul class="menu-level-2">
                            <!-- Menu Level 2 -->
                            <li class="menu-list-2">
                                <a href="#" class="list-item">
                                    <img src="assets/img/arrow-level2.png" alt="mobile">
                                    <span>موبایل</span>
                                </a>
                                <ul class="menu-level-3">
                                    <!-- Menu Level 3 -->
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Apple</a></li>
                                            
                                            
                        
                                        </ul>
                                    </li>
                               
                                   
                                   
                                </ul><!-- End Menu Level 3 -->
                            </li>
                           
                                    
                                </a>
                                <ul class="menu-level-3">
                                    <!-- Menu Level 3 -->
                                 
                                    <li class="menu-list-3">
                                       
                                    </li>
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                        </ul>
                                    </li>
                        
                                </ul><!-- End Menu Level 3 -->
                            </li>
                    
                        </ul><!-- End Menu Level 2 -->
                    </li>
              
       
                          
                        
                            <a href="{{route('basket.index')}}" class="svg-shopp  mr-auto ml-3 mt-2">
        
                            <span class="badge badge-danger position-absolute text-light mt-0 mr-0">{{ $basket->itemCount() }}</span> <img src="{{ asset('assets/img/svg element/Icon awesome-shopping-cart.svg') }}" alt="" class="m-1"></a>
                        @guest
                     
                                <a class="text-center btn-logo" href="{{ route('login_with_code') }}"><img src="{{asset('assets/img/svg element/ورود.svg')}}" alt="" class="pt-1 pl-1">ورود/ثبت نام</a>
                        @endguest
                        @auth       
                        <div class="mt-2 fa-user5"> <a href="{{route('show.profile')}}" class=""><i class="fas fa-user fa-user1 p-3"></i>
                        </a>
                        <div class="profile-box p-3">
                       <a href="">  <i class="fas fa-user-circle ml-2"></i> {{auth()->user()->name}} </a>
                       <hr>
                       <a href="{{route('show.profile')}}">  <i class="fas fa-user fa-user2 ml-2"></i>مشاهده حساب کاربری</a>
                       <hr>
                       <a href="{{route('user.orders.index')}}">  <i class="fas fa-scroll fa-scroll1 ml-2"></i>سفارش های من</a>
                       <hr>
                       <a href="{{ route('logout') }}">  <i class="fas fa-sign-out-alt fa-sign-out-alt1 ml-2"></i>خروج از حساب کاربری</a>
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
            <a href="">
            <img src="{{ asset('assets/img/001.svg') }}" alt="" class="img-thumbnail ml-auto mr-3">
            </a>
            <a href="{{route('basket.index')}}" class="svg-shopp mr-auto ml-3 mt-2">
                <span class="badge badge-danger position-absolute text-light mt-0 mr-0">{{ $basket->itemCount() }}</span> <img src="{{ asset('assets/img/svg element/Icon awesome-shopping-cart.svg') }}" alt="" class="m-1"></a>
            {{-- <a href="">
            <img src="assets/img/svg element/Icon awesome-shopping-cart.svg" alt="" class="svg-shopp ml-3">
            </a> --}}
            @guest
          <a href="{{ route('login_with_code') }}" class="fa-user1"> <img src="assets/img/svg element/ورود.svg" alt="" style="margin-left:3px;">ورود</a>  
            @endguest
           @auth
           <div class="mt-2 mr-auto ml-3 fa-user5"> <a href="{{route('show.profile')}}" class=""><i class="fas fa-user fa-user1 p-3"></i>
           </a>
           <div class="profile-box p-3">
          {{-- <a href="{{ route('logout') }}" class="btn-logo1">خروج</a>   --}}
           @endauth
            
        </div>
        <!--end mobile nav-->
        </header>
        <header>
                <nav class="navbar navbar-expand-lg nav-box text-right">
                <div class="w-100">
                    <form action="{{ route('index.search') }}" method="get">
                    <input type="search" name="query" id="" placeholder="دنبال چی می گردی؟" class="p-2 form-control2 serch-box mt-lg-1">
                    </div>  .
                </form>
                </nav>
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
        