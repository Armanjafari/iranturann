<main>
@if ($errors->any()) 
<div class = "alert alert-danger text-right mt-3 mb-3">
   <ul>
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
@if (session('error'))
<div class = "alert alert-danger text-right mt-3 mb-3">
   {{ session('error') }}   
</div>

@endif
</main>