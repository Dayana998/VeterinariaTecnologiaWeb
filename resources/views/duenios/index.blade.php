@extends('layout')
@section('title', 'Dueños')

@section('content')
@include('partials.session-status')
<!-- Añadir Dueño Modal -->
<div class="modal fade" id="duenioaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="addform">
       	{{ csrf_field() }}
          <div class="modal-body">
           @include('duenios.modalCreate')  
           
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- EDIT Student Modal -->
<div class="modal fade" id="duenioeditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <form id="editformID">
       	{{ csrf_field() }}
       	{{ method_field('PUT') }}
          <div class="modal-body">
            @include('duenios.modalEdit')
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary" id="">Actualizar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- DELETE dueño Modal -->
<div class="modal fade" id="dueniodeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header ">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="deleteFormID">
          <div class="modal-body">
          	{{ csrf_field() }}
	       	{{ method_field('delete') }}
             @csrf

             <input type="hidden" name="id" id="delete_id">
             <p> Esta Seguro de Eliminar ?</p>
          </div>
          <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Eliminar</button>
	      </div>
      </form>
  </div>
</div>
</div>
{{--End of duenios DELETE MODAL--}}

<div class="container">
		
			<div class="d-flex justify-content-between align-items-center mb-3">
			@if(Auth::user()->hasRole=('user'))
				<h1 class="display-4 mb-0">Dueños</h1>
				<div>
				<input type="text" class="form-controller mr-sm-2s" placeholder="Nombre" id="search" name="search">
				<span > <i class="fa fa-search"></i> Buscar</span>
				</div>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#duenioaddmodal">
               <i class="fa fa-user-plus"></i>  Nuevo Registro
			</button>
			@endif	   
		   </div>
		   @if(Auth::user()->hasRole=('admin'))
           <div>
			 @include('duenios.listDuenio')
           </div>
		 @endif
</div>

		 
	
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
{{-- Eliminar --}}
<script>
	$(document).ready(function(){
	$('.deletebtn').on('click', function() {
		$('#dueniodeletemodal').modal('show');

		$tr = $(this).closest('tr');

		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();
		console.log(data);
		$('#delete_id').val(data[0]);
	});

	$('#deleteFormID').on('submit', function(e){
		e.preventDefault();
		var id = $('#delete_id').val();

		$.ajax({
			type: "DELETE",
			url: "/dueniosdelete/"+id,
			data: $('#deleteFormID').serialize(),
			success: function (response) {
				console.log(response);
			$('#dueniodeletemodal').modal('hide');
			alert("Se Elimino Correctamente");
			location.reload();
			},
			error: function(error) {
				console.log(error);
			}
		});
	});
});
</script>

{{-- Editar --}}
<script>
	$(document).ready(function(){
		$('.editbtn').on('click', function() {
			$('#duenioeditmodal').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			}).get();

			console.log(data);
			$('#id').val(data[0]);
			$('#ci').val(data[1]);
			$('#name').val(data[2]);
			$('#lastname').val(data[3]);
			$('#address').val(data[4]);
			$('#phone').val(data[5]);
			$('#email').val(data[6]);
			$('#genero').val(data[7]);
		});

		$('#editformID').on('submit', function(e) {
			e.preventDefault();

			var id = $('#id').val();

			$.ajax({
				type: "PUT",
				url: "/dueniosUpdate/"+id,
				data: $('#editformID').serialize(),
				success: function (response) {
					console.log(response);
					$('#duenioeditmodal').modal('hide');
					alert("Se actualizo correctamente");
					location.reload();
				},
				error: function(error) {
					console.log(error);
				}
			});
		});
	});
</script>
{{-- Añadir --}}
<script>
	$(document).ready(function(){
		$('#addform').on('submit', function(e){
			e.preventDefault();
			$.ajax({
				type:"POST",
				url: "/duenios",
				data: $('#addform').serialize(),
				success: function (response){
					console.log(response)
					$('#duenioaddmodal').modal('hide')
					alert("Se Guardo correctamente");
					location.reload();
				},
				error: function(error){
					console.log(error)
					alert("data not saved");
				}
			});
		});
	});
</script>
{{-- Busqueda --}}
<script>
	$(document).ready(function(){
	$('#search').on('keyup',function(e){
		e.preventDefault();
		$value=$(this).val();
		$.ajax({
			type : 'get',
			url : "{{URL::to('dueniossearch')}}",
			data:{'search':$value},
			success:function(data){
			$('tbody').html(data);
			}
		});
	});
});
</script>
<script type="text/javascript">
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection
