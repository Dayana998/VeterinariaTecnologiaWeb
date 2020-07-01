@csrf
<div class="form-group">
	<label for="chip"> Chip: </label>
	<input class="form-control bg-light shadow-sm @error('chip') is-invalid @else border-0 @enderror" id="chip" name="chip" placeholder="Chip de Registro ..." value="{{ old('chip', $animales->chip) }}">
    {!! $errors->first('chip', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
</div>
<div class="form-group">
	<label for="name"> Nombre </label>
	<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre ..." value="{{ old('name', $animales->name) }}">
    {!! $errors->first('name', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
</div>
 <div class="row">
	<div class="col">
		<label for="raza"> Raza </label>
		<input class="form-control bg-light shadow-sm @error('raza') is-invalid @else border-0 @enderror" id="raza" name="raza" value="{{ old('raza', $animales->raza) }}">
	    {!! $errors->first('raza', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
	</div>
	<div class="col">
		<label for="color"> Color </label>
		<input class="form-control bg-light shadow-sm @error('color') is-invalid @else border-0 @enderror" id="color" name="color" value="{{ old('color', $animales->color) }}">
	    {!! $errors->first('color', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
	</div>
 </div>
 <div class="row">
	<div class="col">
		<label for="peso"> Peso </label>
		<input class="form-control bg-light shadow-sm @error('peso') is-invalid @else border-0 @enderror" id="peso" name="peso" placeholder="Kg" value="{{ old('peso', $animales->peso) }}">
	    {!! $errors->first('peso', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
	</div>
	<div class="form-group">
		<label for="genero">Genero: </label>
		<select class="form-control @error('genero') is-invalid @else border-0 @enderror" id="genero" name="genero" placeholder="Seleccionar">
		<option value="">Seleccionar</option>
		<option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : ''}}>Femenino</option>
		<option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : ''}}>Masculino</option>
		</select>
		{!! $errors->first('genero', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
	  </div>
 </div>
 <div class="form-group">
	<label for="duenio_id">Dueño: </label>
	<select class="form-control @error('duenio_id') is-invalid @else border-0 @enderror" id="duenio_id" name="duenio_id" >
		@foreach($duenios as $duenio)
			 <option value="{{ $duenio->id }}"> {{ $duenio->ci }} </option>
	 @endforeach
	</select>
	{!! $errors->first('duenio_id', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
  </div>

	<br>
	<button class="btn btn-primary btn-large btn-inline">{{ $btnText }}</button>
	<a class="btn btn-primary btn-large  btn-inline" href="{{ route('animales.index') }}"> Cancelar </a>