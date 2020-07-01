@extends('layout')
@section('title', 'Mascota')

@section('content')
 <div class="container">
    <div class="bg-white p-5 shadow rounded">

        <h1>Nombre Mascota: {{ $animal->name }}</h1>
        <hr>

        <p class="text-secondary">Cip: {{ $animal->chip }}</p>
        <p class="text-secondary">Raza: {{ $animal->raza}}</p>
        <p class="text-secondary">Color: {{ $animal->color}}</p>
        <p class="text-secondary">Peso: {{ $animal->peso}}</p>
        <p class="text-secondary">Genero: {{ $animal->genero}}</p>
        <p class="text-secondary">Dueño:{{ $animal->ent->name }} {{ $animal->ent->lastname }}</p>

         <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-primary" href="{{ route('animales.index') }}"> Regresar </a>
           @auth
            <div class="btn-group btn-group-sm">
                  <a class="btn btn-primary" href="{{ route('animales.edit', $animal) }}">Editar</a>
             </div>
               @endauth
         </div>
   </div>
</div>
{{--



              <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
             </div>
                <form class="d-none" id="delete-project" method="POST" action="{{ route('productos.destroy', $producto) }}">
                  @csrf @method('DELETE')
                </form>

        </div>

   --}}
@endsection