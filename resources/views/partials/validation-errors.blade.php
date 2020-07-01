@if($errors->any())
<div class="alert alert-primary">
   <ul class="m-1">
   	@foreach($errors->all() as $error)
   	<li >{{ $error }}</li>
   	@endforeach
   </ul>
</div>
   @endif
