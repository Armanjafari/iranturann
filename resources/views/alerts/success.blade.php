@if (session('success'))
<div class = "row alert alert-success">
   <ul>
      {{session('success') }}
   </ul>
</div>
@endif