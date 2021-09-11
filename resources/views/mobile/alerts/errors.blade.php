@if ($errors->any())
      <div class="alert-box-error">
        <button type="button" class="close" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        @foreach ($errors->all() as $error)

        <div>

         <span class="ml-2">{{ $error }}</span>
        <img src="{{asset('assets/mobile/img/svg/error.svg')}}" alt="">

        </div>
      @endforeach


        </div>
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
