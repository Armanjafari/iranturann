@extends('Admin.layout.master')
@section('content')
<div class="col-lg-9">

    <div class="card-header add-product-box text-center">
        <span class="add-product"> مدیریت دسته بندی</span>
    </div>
    <div class="card mt-3 text-right">
        <div class="card-body">
            <div class="row">
                    <form action="{{ route('edit.market.category',$market->id) }}" method="POST">
                        @csrf                
                <div class="col-lg-12 mt-2 mr-5">
                    <input class="btn-Record text-light" type="submit" value="ثبت دسته">
                            @include('alerts.success')
                            @include('alerts.errors')
                                <select name="categories[]" class="form-control" multiple>

                                    @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->persian_name}}</option>
                                      {{-- @forelse ($market->categories as $marketCategory)
                                        // TODO fix this {{ $market->categories->[]->id == $category->id ? "checked" : "" }} 
                                      @empty
                                          
                                      @endforelse --}}
                                    @empty

                                    @endforelse
                </div>

            </div>
        </form>

        </div>
    </div>
</div>
<!-- end register and delete categories -->
</div>
@endsection