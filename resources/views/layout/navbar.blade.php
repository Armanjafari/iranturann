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
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Samsung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Huawei</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">HTC</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Mi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">ASUS</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Lenovo</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Motorola</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مشاهده موارد
                                                    بیشتر</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">انواع گوشی</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">گوشی دو سیم
                                                    کارت</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">گوشی یک سیم
                                                    کارت</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">گوشی های 4G</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">گوشی های
                                                    کلاسیک</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">فبلت</a></li>
                                        </ul>
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">بر اساس سیستم عامل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">اندروید</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">IOS</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">ویندوزفون</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">سایر سیسنم
                                                    عامل</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">هدفون</h2>
                                            </li>
                                        </ul>
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">هدفون توگوشی</h2>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">لوازم جانبی گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">محافظ صفحه
                                                    نمایش</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">کیف و
                                                    کاورگوشی</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">هندزفری</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">کارت حافظه
                                                    microSD</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">پاوربانک</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مونوپاد و پایه
                                                    نگه
                                                    دارنده</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">شارژرموبایل</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">باتری گوشی</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">فبم لمسی
                                                    (Stylus)</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مشاهده موارد
                                                    بیشتر</a>
                                            </li>
                                        </ul>
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گجت های موبایل</h2>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-list-3 background1">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">رده ی کاربری</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مناسب بازی</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مناسب عکسی</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مناسب عکاسی
                                                    سلفی</a>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">مقاوم دربرابر
                                                    آب</a>
                                            </li>
                                        </ul>
                                       
                                    </li>
                                </ul><!-- End Menu Level 3 -->
                            </li>
                            <li class="menu-list-2"><a href="#" class="list-item">
                                    <img src="assets/img/arrow-level2.png" alt="tablet book reader">
                                    <span>تبلت و کتاب خوان</span>
                                </a>
                                <ul class="menu-level-3">
                                    <!-- Menu Level 3 -->
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-list-3">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-list-3 background2">
                                        <ul class="menu-level-last">
                                            <li class="menu-list-last">
                                                <h2 class="list-heading">گوشی موبایل</h2>
                                            </li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sumsoung</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">LG</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Nokia</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Howavi</a></li>
                                            <li class="menu-list-last"><img src="assets/img/level3-item-icon.png"
                                                    alt="list item icon"><a href="#" class="list-item">Sony</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu Level 3 -->
                            </li>
                            <li class="menu-list-2"><a href="#" class="list-item">
                                    <img src="assets/img/arrow-level2.png" alt="tablet book reader">
                                    <span>لپ تاب</span>
                                </a></li>
                            <li class="menu-list-2"><a href="#" class="list-item">
                                    <img src="assets/img/arrow-level2.png" alt="tablet book reader">
                                    <span>دوربین</span>
                                </a></li>
                        </ul><!-- End Menu Level 2 -->
                    </li>
                    <li class="menu-list-1"><a href="#" class="list-item">
                            <img src="assets/img/download (3).png" alt="">
                            <span>مد و پوشاک</span>
                            <img class="item-icon" src="assets/img/download.png" alt="">
                        </a></li>
                    <li class="menu-list-1"><a href="#" class="list-item">
                            <img src="assets/img/download (4).png" alt="">
                            <span>خانه، آشپزخانه و ابزار</span>
                            <img class="item-icon" src="assets/img/download.png" alt=""></a></li>
                            <a href="{{route('basket.index')}}" class="svg-shopp mr-auto ml-5 mt-2">
                    <img src="{{ asset('assets/img/svg element/Icon awesome-shopping-cart.svg') }}" alt="" class=""></a>
                        @guest
                        <button type="button" class="btn-logo">
                                <i class="far fa-user"></i>
                                <a class="text-center" href="{{ route('login') }}">ورود به حساب کاربری</a>
                            </button>
                        @endguest
                        @auth                    
                        <button type="button" class="btn-logo">
                            <i class="far fa-user"></i>
                            <a class="text-center" href="{{ route('logout') }}">خروج به حساب کاربری</a>
                        </button>
                        @endauth
                </ul><!-- End Menu Level 1 --> 
            </div>
        </nav>
        <!--end navbar menu-->
        <!--start mobile nav-->
        <div class="mobile-nav">
            <a href="#" class="toggle-btn" id="toggle"><span></span></a>
            <img src="{{ asset('assets/img/001.svg') }}" alt="" class="img-thumbnail ml-auto mr-3">
            <img src="assets/img/svg element/Icon awesome-shopping-cart.svg" alt="" class="svg-shopp ml-4">
            <i class="far fa-user mt-1"></i>
            <button type="button" class="btn-logo ml-auto btn-logo1 p-3">
                <span class="text-center">ورود/ثبت نام</span>
            </button>
        </div>
        <!--end mobile nav-->
        <!--start header2-->
    <nav class="navbar navbar-expand-lg  position-fixed nav-box"> 
        <input type="search" name="" id="" placeholder="دنبال چی می گردی؟" class="p-2 form-control serch-box mt-lg-1">
            <div class="dropdown dropdown-city mr-auto">
                <button class="btn  dropdown-toggle dropdown-city-button pl-5 mt-lg-1" type="button" id="dropdown_coins" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                  از کجا می خوایی خرید کنی؟
                </button>
                <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
                    <form class="px-4 py-2">
                        <input type="search" class="form-control search-city" id="searchCoin" placeholder="شهر مورد نظر" autofocus="autofocus">
                    </form>
                    <div id="menuItems"></div>
                    <div id="empty" class="dropdown-header">شهر مورد نظر شما پیدا نشد</div>
                </div>
            </div>
           
    </nav>
        </header>
        <!-- 

        {{ $basket->itemCount() }}</a>
                @guest
                <button type="button" class="btn-logo">
                        <i class="far fa-user"></i>
                        <a class="text-center" href="{{ route('login') }}">ورود به حساب کاربری</a>
                    </button>
                @endguest
                @auth                    
                <button type="button" class="btn-logo">
                    <i class="far fa-user"></i>
                    <a class="text-center" href="{{ route('logout') }}">خروج به حساب کاربری</a>
                </button>
                @endauth
        -->