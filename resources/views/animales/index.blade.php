@extends('layout')
@section('title', 'Mascotas')

@section('content')
@include('partials.session-status')
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-3">

			 <h1 class="display-4 mb-0">Mascotas</h1>
			 <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('animales.search')}}" autocomplete="off">
				<input class="form-control mr-sm-2" type="search" name="name" placeholder="Nombre" aria-label="Search">
				<input class="form-control mr-sm-2" type="search" name="chip" placeholder="Chip de Registro" aria-label="Search">
					<button class="btn btn-primary my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> Buscar</button>
			</form>
				<a class="btn btn-primary" href="{{ route('animales.create') }}">Nuevo Registro</a>
        </div>
	</div>
	@if(Auth::user()->hasRole('admin'))

	<ul>
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<table class="table table-striped ">
				<thead >
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nombre</th>
						<th scope="col">Chip de Registro</th>
						<th scope="col">Dueño</th>
						<th scope="col">Raza</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>

				<tbody>
						@forelse($animales as $animal)
						<a class="text-secondary d-flex justify-content-between align-items-center" href="{{ route('animales.show', $animal) }}">
					<tr>
						    <td> {{ $animal->id }} </td>
							<td > {{ $animal->name }}</td>
							<td > {{ $animal->chip }}</td>
							<td> {{ $animal->ent->name }} {{ $animal->ent->lastname }}   </td>
							<td > {{ $animal->raza }}</td>
							<td>
								 <a class="btn btn-warning btn-md" href="{{ url('animales/'.$animal->id.'edit') }}"> <i class="fa fa-eye"></i> </a>|
								<a class="btn btn-primary btn-md" href="{{ route('animales.edit', $animal) }}"> <i class="fa fa-edit"></i> Editar</a>|
								<form method="POST" action="{{ url('animales/'.$animal->id) }}"  style="display:inline;">
									@csrf @method('DELETE')
									<button class="btn btn-danger btn-md" type="submit" onclick="return confirm('Esta seguro de Borrar el registro?')">Borar</button>
							</td>
					</tr></a>
						@empty
			                <li>No existen Mascotas Registrados</li>
		                @endforelse
				</tbody>
			</table>


			</li>


	</ul>
@endif
@endsection