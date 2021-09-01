@if (session('success'))
<div class="alert-box-success">
   <button type="button" class="close" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   <span class="ml-2">{{session('success')}}</span>
   <img src="{{asset('assets/mobile/img/svg/success.svg')}}" alt="">
  </div>
@endif
