@csrf
<div class="form-group">
	<label for="name"> Nombre </label>
	<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre ..." value="{{ old('name', $producto->name) }}">
	{!! $errors->first('name', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
</div>
 <div class="row">
		 <div class="col">
			<label for="precio"> Precio </label>
			<input type="number" class="form-control bg-light shadow-sm @error('precio') is-invalid @else border-0 @enderror" id="precio" name="precio" placeholder="Precio ..." value="{{ old('precio', $producto->precio) }}">
			{!! $errors->first('precio', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
		</div>
		 <div class="form-group">
			<label for="tipo">tipo: </label>
			<select class="form-control @error('tipo') is-invalid @else border-0 @enderror" id="tipo" name="tipo">
				<option value="">Seleccionar</option>
			<option value="accesorios" {{ old('tipo', $producto->tipo)}}>Accesorios</option>
			 <option value="ropa" {{ old('tipo', $producto->tipo) }}>Ropa</option>
			 <option value="comida" {{ old('tipo', $producto->tipo) }}>Comida</option>
			 <option value="juguetes" {{  old('tipo', $producto->tipo)}}>Juguetes</option>
			</select>
			{!! $errors->first('tipo', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
		</div>
 </div>

<div class="form-group">
	<label for="stock"> Cantidad </label>
	<input type="number" class="form-control bg-light shadow-sm @error('stock') is-invalid @else border-0 @enderror" id="stock" name="stock" placeholder="Cantidad ..." value="{{ old('stock', $producto->stock) }}">
	{!! $errors->first('stock', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
</div>
<div class="form-group">
	<label for="foto"> Imagen del Producto </label>
	<input type="file"  class="form-control bg-light shadow-sm @error('foto') is-invalid @else border-0 @enderror" id="foto" name="foto"  value="{{ old('foto', $producto->foto) }}">
	{!! $errors->first('foto', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
</div>
	<br>
	<button class="btn btn-primary btn-large btn-block">{{ $btnText }}</button>
	<a class="btn btn-danger btn-large btn-block" href="{{ route('productos.index') }}"> Cancelar </a>