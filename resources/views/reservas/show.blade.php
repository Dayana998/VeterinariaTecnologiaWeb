@extends('layout')
@section('title', 'Mascota')

@section('content')
 <div class="container">
    <div class="bg-white p-5 shadow rounded">

        <h1>ID Cita: {{ $reserva->id }}</h1>
        <hr>
        
        <p class="text-secondary">Dueño Id: {{ $reserva->duenio_id }}</p>
        <p class="text-secondary">Animales Id: {{ $reserva->id_animales}}</p>
        <p class="text-secondary">Telefono: {{ $reserva->phone}}</p>
        <p class="text-secondary">Fecha: {{ $reserva->date}}</p>

         <div class="d-flex justify-content-between align-items-center">
            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Regresar </a>
           
            <div class="btn-group btn-group-sm">
                  <a class="btn btn-primary" href="{{ route('reservas.edit', $reserva) }}">Editar</a>
             </div> 
            
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