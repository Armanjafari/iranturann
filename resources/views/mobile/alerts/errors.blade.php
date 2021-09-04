@if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert-box-error">
      <ul>

         <button type="button" class="close" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         <span class="ml-2"><li>{{ $error }}</li></span>
         <img src="{{asset('assets/mobile/img/svg/error.svg')}}" alt="">
      </ul>

        </div>
      @endforeach
@endif
@if (session('error'))
   <div class="alert-box-error">
      <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <span class="ml-2">{{ session('error') }} </span>
      <img src="{{asset('assets/mobile/img/svg/error.svg')}}" alt="">
     </div>
@endif
