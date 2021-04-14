@extends('Admin.layout.master')
@section('content')
        
                <div class="col-lg-9 mb-3">
                    <div class="card-header add-product-box text-center">
                        <span class="add-product"> لیست گارانتی </span>
                    </div>
                    <div class="col-lg-12 mt-3">
            
                        <div class="card p-3">
                            <div class="row">
                              <form action="{{ route('create.waranty') }}" method="post"> 
                                @csrf     
                            <div class="col-lg-3 mt-2">
                                <div class="first-name">
                              <label for="">نام گارانتی</label>
                           <input type="text" name="name" class="form-control-one p-2">
                        </div>
                        </div>
                         <div class="col-lg-3">
                         <input class="btn-Record text-light"type="submit" value="ثبت">
                        </div>
                        </div>
                        </div>
                    </div>
                    
                                    <div class="col-lg-12 mt-3">
                                    <table class="table table-bordered table-striped text-center form-control-two">
                                        <thead>
                                          <tr>
                                              <th>شماره</th>
                                            <th>نام گارانتی</th>
                                            <th>عملیات</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @forelse ($waranties as $waranty)
                                          <tr>
                                            <td> {{ $waranty->id }} </td>
                                            <td>
                                               {{ $waranty->name }} 
                                            </td>
                                            <td><a href="{{ route('show.waranty.edit.form' , $waranty->id) }}" class="a1">ویرایش</a></td>
                                              </tr>
                                          @empty
                                            گارانتی وجود ندارد
                                          @endforelse
                                        </form> 
                                        </tbody>
                                      </table>

                                      </div>
                                      </div>
                                      @endsection