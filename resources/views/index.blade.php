@extends('layout.master')
@section('content')
<!--start header2-->
<header>
    <nav class="navbar navbar-expand-lg  position-fixed nav-box">
        <input type="search" name="" id="" placeholder="دنبال چی می گردی؟" class="p-2 form-control serch-box mt-lg-1">
        <div class="dropdown dropdown-city mr-auto">
            <button class="btn  dropdown-toggle dropdown-city-button pl-5 mt-lg-1" type="button" id="dropdown_coins"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                از کجا می خوایی خرید کنی؟
            </button>
            <div id="menu" class="dropdown-menu" aria-labelledby="dropdown_coins">
                <form class="px-4 py-2">
                    <input type="search" class="form-control search-city" id="searchCoin" placeholder="شهر مورد نظر"
                        autofocus="autofocus">
                </form>
                <div id="menuItems"></div>
                <div id="empty" class="dropdown-header">شهر مورد نظر شما پیدا نشد</div>
            </div>
        </div>

    </nav>
</header>
<!-- end navbar !-->

<main>
    <div class="row">
        <div class="col-lg-6 mt-5">
            <div class="card mt-5">
                <div class="card-header text-center header-discount">
                    <a href="#">تخفیف بالای 20 درصد</a>
                </div>
                <div class="owl-carousel owl-theme" id="owl-mobile">
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">25%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">25%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">25%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card mt-5">
                <div class="card-header text-center header-discount">
                    <a href="#">تخفیف زیر 20 درصد</a>
                </div>
                <div class="owl-carousel owl-theme" id="owl-mobile3">
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">15%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">15%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="Circle-discount text-center text-light">
                            <div class="mt-2">
                                <a href="#" class="text-light discount-percent">15%
                                </a>
                                <p>تخفیف</p>
                            </div>
                        </div>
                        <div class="card-body text-center card-bg-box">
                            <a href="#" class="float-right How-to-send">پس کرایه</a>
                            <figure class="mb-0">
                                <img src="assets/img/01-removebg-preview.png" alt="">
                            </figure>
                            <caption>
                                <a href="#">هودی ادی داس طرح زمستانه</a>
                            </caption>
                            <p class="font-weight-bold mt-1 mb-0">125000تومان</p>
                            <p class="line-dro mt-1 mb-0">125000</p>
                            <button type="button" class="btn-add-red mt-3"><a href="#"
                                    class="adding-product">افزودن</a></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala ">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xl-3 mt-5 kala">
            <div class="card">
                <div class="card-body text-right mr-4">
                    <span class="mr-5">تضمین کیفیت کالا</span><br>
                    <img src="assets/img/svg element/Icon awesome-box.svg" alt="" class="box-img mt-2">
                    <span class="position-absolute mt-2">ضمانت کیفیت کالا توسط ما</span>
                    <span class="position-absolute mt-4">ضمانت کیفیت کالا توسط ما</span>
                </div>
            </div>
        </div>
        <div class="card-header text-center mt-5 card-header-product w-100"><a class="new-product">مراکز خرید</a></div>
        <div class="owl-carousel owl-theme mt-5" id="owl-mobile4">
            @forelse ($centers as $item)
            <div class="item">

                <img src="img/negin.png" class="w-100 mt-3 shopping-centre" style="height: 100px">

                <form action="">
                    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                        <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio"
                            name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating"
                            value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1"
                            id="1"><label for="1">☆</label>
                    </div>
                </form>
                <div class="text-center">
                    <caption><a href="{{ route('sellers.by.centers', $item->id) }}" class="shopping-centre-text">
                            {{$item->name}} </a></caption>
                </div>
            </div>
            @empty
            چیزی وجود نداره داداش
            @endforelse

        </div>
        <div class="owl-carousel owl-theme mt-5">
            @forelse ($categories as $item)
            <div class="item"><a href="{{ route('product.by.category', $item->id) }}" class="primary-colora">
                    {{$item->persian_name}} </a></div>
            @empty
            چیزی وجود نداره داداش
            @endforelse
        </div>

        <div class="card-header text-center mt-5 card-header-product w-100"><a class="new-product">فروشندگان</a></div>
        <div class="owl-carousel owl-theme mt-5">
            @forelse ($markets as $item)
            <div class="item">
                <div class="card border-0 card-shopping">
                    <div class="card-body text-center p-2"><img src="assets/img/10.png" class="slide-show-odd mb"
                            alt="">
                        <form action="">
                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label
                                    for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label
                                    for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label
                                    for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label
                                    for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                    for="1">☆</label>
                            </div>
                        </form>
                        <caption><a> {{$item->market_name}} </a></caption>
                    </div>
                </div>
            </div>
            @empty
            چیزی وجود نداره داداش
            @endforelse
        </div>
        <div class="card-header text-center mt-5 card-header-product w-100"><img style="width:40px;height:50px;"
                src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt=""><a
                class="new-product"><img src="">فروشندگان
                شبکه های اجتماعی <img style="width:40px;height:50px; border-radius:10px" src="img/whatsapp.ico"
                    alt=""></a></div>
        <div class="owl-carousel owl-theme mt-5">
            @forelse ($messenger_seller as $item)
            <div class="item">
                <div class="card border-0 card-shopping">
                    <div class="card-body text-center p-2"><img
                            src="https://files.virgool.io/upload/users/16247/posts/ns9tgw7shczj/ffx3ya8dpemr.jpeg"
                            class="slide-show-odd mb" alt="">
                        <form action="">
                            <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label
                                    for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label
                                    for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label
                                    for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label
                                    for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                    for="1">☆</label>
                            </div>
                        </form>
                        <caption><a> {{$item->market_name}} </a></caption>
                    </div>
                </div>
            </div>
            @empty
            چیزی وجود نداره داداش
            @endforelse

        </div>
    </div>
</main>
@endsection