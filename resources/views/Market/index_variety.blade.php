@extends('Market.layout.master')
@section('content')
<table class="table table-striped table-responsive-sm" id="example">
    <thead>
        <tr>
            <th>شکل محصول</th>
            <th>نام محصول</th>
            <th>کد محصول</th>
            <th>قیمت</th>
            <th>قیمت مرجع</th>
            <th>موجودی</th>
            <th>تنوع</th>
            <th>ویرایش/حذف</th>
            <th>فعال/غیرفعال</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
        @forelse ($product->fulls as $full)
        <tr>
            <td><img src="{{ $product->pure->images->first()->address ?? '#' }}" style="width:200px;height:200px;" alt="" class="fluid-img">
            </td>
            <td>{{$product->pure->persian_title}}</td>
            <td>{{$product->pure->id}}</td>
            <td><a>{{$full->price}}</a></td>
            <td><a>{{$product->pure->price}}</a></td>
            <td><a>{{$full->stock}}</a></td>
            <td>
                @if ($full->colors->option->name == 'رنگ')
                <div>
                    <a>{{$full->colors->title}}</a>
                    <p
                        style="background-color: {{$full->colors->value}}; width: 20px; height: 20px; margin: auto; display: inline-block; margin-right: 0.4em;">
                    </p>
                </div>
                @else
                <div>
                    <a>{{$full->colors->title}}</a>
                    <p>
                       {{$full->colors->value}}
                    </p>
                </div>
                @endif
            </td>

            <td><a href="{{ route('market.variety.edit.form',$full->id) }}" class="edit"><i class="fas fa-edit"></i></a>
                <a class="trash mr-3"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
            <td>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </td>
        </tr>
        @empty
            
        @endforelse
        @empty

        @endforelse
    </tbody>
</table>
@endsection