@extends('layout')
@section('title', 'Productos')

@section('content')

@include('partials.session-status')

@if(Auth::user()->hasRole('user'))	
        <div class="row">
				@foreach($productos as $producto)

					<div class="card border-primary mb-4" style="width:18rem;">
						<img class="card-img-top" src="{{asset('storage').'/'.$producto->foto}}" alt="image">

						<div class="card-body">
							<h5 class="card-title"> {{ $producto->name }}</h5>
							<hr>
							<p class="card-text"> {{$producto->precio}} Bs.</p>
							<a class="btn btn-primary btn-md" href="{{ url('productos/'.$producto->id.'show') }}"> <i class="fa fa-eye"></i> Ver mas </a>
						</div>
					</div>
				
			@endforeach
		</div>
@endif		
@if(Auth::user()->hasRole('admin'))		
		
	<div class="container">
		<div class="d-flex justify-content-between align-items-center mb-3">

			 <h1 class="display-4 mb-0">Productos</h1>
			 <form class="form-inline my-2 my-lg-0" method="GET" action="{{route('productos.search')}}" autocomplete="off">
				<input class="form-control mr-sm-2" type="search" placeholder="Nombre" name="name" aria-label="Search">
			
					<button class="btn btn-primary my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> Buscar</button>
			</form>
				<a class="btn btn-primary" href="{{ route('productos.create') }}"> <i class="fas fa-user-plus"></i>Nuevo Registro</a>
        </div>
	</div>
	<ul>
		<li class="list-group-item border-0 mb-3 shadow-sm">
			<table class="table table-striped ">
				<thead >
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Nombre</th>
						<th scope="col">Tipo</th>
						<th scope="col">Stock</th>
						<th scope="col">Foto</th>
						<th scope="col">Acciones</th>
					</tr>
				</thead>

				<tbody >
						@forelse($productos as $producto)
						<tr>
						    <td> {{ $producto->id }} </td>
							<td> {{ $producto->name }}</td>
							<td> {{ $producto->tipo }}</td>
							<td> {{ $producto->stock }}</td>
							
							<td> <img src="{{asset('storage').'/'.$producto->foto}}" width="80px" alt="image">
							</td>
							<td>
								<a class="btn btn-primary btn-md" href="{{ route('productos.edit', $producto) }}"> <i class="fa fa-edit"></i> Editar</a>|
								<form method="POST" action="{{ url('productos/'.$producto->id) }}"  style="display:inline;">
									@csrf @method('DELETE')
									<button class="btn btn-danger btn-md" type="submit" onclick="return confirm('Esta seguro de Borrar el registro?')"> <i class="fa fa-trash"></i> Borar</button>
							</td>
					</tr></a>
						@empty
			                <li>No existen Productos Registrados</li>
		                @endforelse
				</tbody>
			</table>
			</li>
	</ul>
@endif
@endsection
