@extends('layout')
@section('title', 'Reservas')

@section('content')
@include('partials.session-status')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-3">
			
	         <h1 class="display-4 mb-0">Citas</h1>	
			 		
			 <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('reservas.search')}}" autocomplete="off">
				<input class="form-control mr-sm-2" type="date" name="date"  aria-label="Search">
				<input class="form-control mr-sm-2" type="search" name="chip" placeholder="ID Animales" aria-label="Search">
				<a class="btn btn-success btn-md btn-inline" href="{{ route('reservas.index') }}">All</a>
				<button class="btn btn-primary my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> Buscar</button>
			</form>		
			  <a class="btn btn-primary" href="{{ route('reservas.create') }}">Nuevo Registro</a>	
		</div>
			
	</div>
	
	@if(Auth::user()->hasRole('admin'))
							
	<ul>
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<table class="table table-striped ">
				<thead >
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Dueño</th>
						<th scope="col">Chip Animal</th>
						<th scope="col">Telefono</th>						
						<th scope="col">Fecha</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>
					
				<tbody>
					@forelse($reservas as $reserva)
					<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('reservas.show', $reserva) }}">
					    <tr>
							<td> {{ $reserva->id }} </td>
							<td> {{ $reserva->ent->name }} {{ $reserva->ent->lastname }}</td>
							<td> {{ $reserva->ani->chip }} </td>
							<td> {{ $reserva->phone }}</td>
							<td> {{ $reserva->date }} </td>
							<td> 
								<a class="btn btn-warning btn-md" href="{{ url('reservas/'.$reserva->id.'edit') }}"> <i class="fa fa-eye"></i>Ver</a>|
								<a class="btn btn-primary btn-md" href="{{ route('reservas.edit', $reserva) }}"><i class="fa fa-edit">Editar</i></a>|								| 
								<form method="POST" action="{{ url('reservas/'.$reserva->id) }}"  style="display:inline;">
									@csrf @method('DELETE')
									<button class="btn btn-danger btn-md" type="submit" onclick="return confirm('Esta seguro de Borrar el registro?')"> <i class="fa fa-trash"></i> Borar</button>
							</td>
					   </tr></a>	
					@empty
						 <li>No existen Reservas Registradas</li>
					@endforelse
						
				</tbody>
			</table>
					
			
			</li>
			
		
	</ul>
@endif
@endsection
