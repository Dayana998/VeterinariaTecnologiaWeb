@csrf
<div class="form-group">
	<label for="duenio_id">Dueño CI: </label>
	<select class="form-control @error('duenio_id') is-invalid @else border-0 @enderror" id="duenio_id" name="duenio_id" >
		@foreach($duenios as $duenio)
			 <option value="{{ old('duenio_id',$duenio->id) }}"> {{ $duenio->ci}}</option>
	 @endforeach
	</select>
  </div>
  <div class="form-group">
	<label for="id_animales">Animal CHIP: </label>
	<select class="form-control @error('id_animales') is-invalid @else border-0 @enderror" id="id_animales" name="id_animales" >
		@foreach($animales as $animal)
			 <option value="{{ old('id_animales',$animal->id) }}"> {{ $animal->chip }}</option>
	 @endforeach
	</select>
  </div>
 <div class="row">
	<div class="col">
		<label for="phone"> Telefono: </label>
		<input class="form-control bg-light shadow-sm @error('phone') is-invalid @else border-0 @enderror" id="phone" name="phone" value="{{ old('phone', $reservas->phone) }}">
	</div>
	<div class="col">
		<label for="date"> Fecha: </label>
		<input type="date" class="form-control bg-light shadow-sm @error('date') is-invalid @else border-0 @enderror" id="date" name="date" value="{{ old('date', $reservas->date) }}">
	</div>
 </div>

	<br>
	<button class="btn btn-primary btn-large btn-block">{{ $btnText }}</button>
	<a class="btn btn-primary btn-large btn-block" href="{{ route('reservas.index') }}"> Cancelar </a>