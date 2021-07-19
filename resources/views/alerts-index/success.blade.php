@if (session('success'))
<main>
<div class = "alert alert-success text-center mt-3 mb-3">
   <ul>
      {{ session('success') }}   
   </ul>
 </div>
</main>
@endif