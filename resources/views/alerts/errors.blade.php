@if ($errors->any())
<div class = "alert alert-danger w-50">
   <ul>
      @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif