@extends('Market.layout.master')
@section('content')
<table class="table table-striped table-responsive-sm" id="example">
    <thead>
        <tr>
            <th>شکل محصول</th>
            <th>نام محصول</th>
            <th>قیمت</th>
            <th>قیمت مرجع</th>
            <th>موجودی</th>
            <th>تنوع</th>
            <th>ویرایش/حذف</th>
            <th>فعال/غیرفعال</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="assets/img/6a6650c08fe4b430782cebfa62539ab56ab2b741_1601964067.png" alt="" class="fluid-img">
            </td>
            <td>هودی مردانه ادی داس طرح زمستانه</td>
            <td><a>350,000تومان</a></td>
            <td><a>320,000تومان</a></td>
            <td><a>2</a></td>
            <td>
                <div>
                    <a>قرمز</a>
                    <p
                        style="background-color: red; width: 20px; height: 20px; margin: auto; display: inline-block; margin-right: 0.4em;">
                    </p>
                </div>
            </td>

            <td><a class="edit"><i class="fas fa-edit"></i></a>
                <a class="trash mr-3"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            <td>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td><img src="assets/img/5852ac425c16e3ae3cbdc1b20596f723c54ec355_1604466916.png" alt="" class="fluid-img">
            </td>
            <td>هودی مردانه ادی داس طرح زمستانه</td>
            <td><a>240,000تومان</a></td>
            <td><a>220,000تومان</a></td>
            <td><a>3</a></td>
            <td>
                <div>
                    <a>سایز 50</a>
                </div>
            </td>

            <td><a class="edit"><i class="fas fa-edit"></i></a>
                <a class="trash mr-3"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            <td>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </td>
        </tr>
        <tr>
            <td><img src="assets/img/117606354.png" alt="" class="fluid-img"></td>
            <td>هودی مردانه ادی داس طرح زمستانه</td>
            <td><a>310,000تومان</a></td>
            <td><a>290,000تومان</a></td>
            <td><a>5</a></td>
            <td>
                <div>
                    <a>زرد</a>
                    <p
                        style="background-color: yellow; width: 20px; height: 20px; margin: auto;display: inline-block; margin-right: 0.4em;">
                    </p>
                </div>
            </td>

            <td><a class="edit"><i class="fas fa-edit"></i></a>
                <a class="trash mr-3"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            <td>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </td>
        </tr>
    </tbody>
</table>
@endsection