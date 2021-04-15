@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">

    <div class="card-header add-product-box text-center">
        <span class="add-product"> مدیریت دسته بندی</span>
    </div>
    <div class="card mt-3 text-right">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <form action="{{ route('create.categroy') }}" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header text-center  text-info">
                                انتخاب سردسته
                            </div>
                            @include('alerts.success')
                            @include('alerts.errors')
                            <div class="container mt-3">
                                @forelse ($categories as $category)
                                <ul>
                                    <li>
                                        <input type="radio" name="parent_id" value="{{$category->id}}" id="">
                                        <label for=""> {{$category->persian_name}} </label>

                                        @forelse ($category->child as $child)
                                        <ul>
                                            <li>
                                                <input type="radio" value="{{ $child->id }}" name="parent_id"
                                                    id="">
                                                <label for=""> {{$child->persian_name}} </label>
                                                @forelse ($child->child as $child)
                                                <ul>
                                                    <li>
                                                        <input type="radio" name="parent_id" value="{{ $child->id }}"
                                                            id="">
                                                        <label for=""> {{$child->persian_name}} </label>
                                                        @forelse ($child->child as $child)
                                                        <ul>
                                                            <li>
                                                                <input type="radio" name="parent_id"
                                                                    value="{{ $child->id }}" id="">
                                                                <label for=""> {{$child->persian_name}} </label>
                                                            </li>
                                                            
                                                        </ul>
                                                        @empty

                                                        @endforelse
                                                    </li>
                                                </ul>
                                                @empty

                                                @endforelse
                                            </li>
                                        </ul>
                                        @empty

                                        @endforelse
                                    </li>
                                </ul>
                                @empty

                                @endforelse
                            </div>
                        </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <div class="first-name mr-3">
                        <label for="">نام دسته</label>
                        <input type="text" name="persian_name" class="form-control-one p-2">
                    </div>
                </div>
                <div class="col-lg-3 mt-3">
                    <div class="first-name mr-3">
                        <label for="">نام انگلیسی دسته </label>
                        <input type="text" name="name" class="form-control-one p-2">
                    </div>
                </div>
                <div class="col-lg-3 mt-2 mr-5">
                    <input class="btn-Record text-light" type="submit" value="ثبت دسته">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end register and delete categories -->
</div>
@endsection