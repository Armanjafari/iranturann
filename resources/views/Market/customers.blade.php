@extends('Market.layout.master')
@section('content')
<main>
    <!-- start add-product box-->
      <div class="container">
        <input type="text" placeholder="serch...">
        <div class="serch"></div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary float-right mr-2">
        لیست مشتریان من
        </button>
    <div  class="text-left ml-2 d-inline-block">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <i class="fa fa-share-alt" aria-hidden="true"></i>
        ارسال فروشگاه من
      </button>
    </div>
    <div class="col-lg-12">
    <table class="table table-bordered table-striped text-center mt-5 table-seler">
        <thead class="">
          <tr>
            <th scope="col">نام</th>
            <th scope="col">شماره تلفن</th>
          
          </tr>
        </thead>
        <tbody>
          @forelse ($user->customers as $customer)
          <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone_number}}</td>
          </tr>
          @empty

          @endforelse
        </tbody>
      </table>
      </div>
    
      <!-- Modal -->
      <div class="modal fade text-right" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">اشتراک گذاری از طریق</h5>
              <div class="mr-auto">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            </div>
            <div class="modal-body">
            <a href="whatsapp://send?text={{$user->market->applink ?? ''}}" data-action="share/whatsapp/share">واتساپ
            <img src="{{asset('assets/img/svg element/icons8-whatsapp.svg')}}" class="ml-1" alt=""></a>
            <a href="" class="mr-3"><img src="{{asset('assets/img/svg element/telegram.svg')}}" alt=""> تلگرام</a>
            <a href="sms:?body={{$user->market->applink ?? ''}}" class="mr-3">
            <i class="fas fa-sms"></i>
            پیامک
          </a> 
          </div>
          </div>
          </div>
      </div>
@endsection