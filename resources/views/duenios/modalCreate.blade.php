@csrf

		      	<div class="form-group">
					<label for="ci"> Ci: </label>
					<input class="form-control bg-light shadow-sm @error('ci') is-invalid @else border-0 @enderror"  name="ci" placeholder="Celula de Identidad ..." value="{{-- old('ci', $duenios->ci) --}}">
			        {!! $errors->first('ci', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
				</div>

			 <div class="row">
				<div class="col">
					<label for="name"> Nombre </label>
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" name="name" placeholder="Nombre ..." value="{{-- old('name', $duenios->name) --}}">
                    {!! $errors->first('name', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
				</div>
				<div class="col">
					<label for="lastname"> Apellido </label>
					<input class="form-control bg-light shadow-sm @error('lastname') is-invalid @else border-0 @enderror" name="lastname" placeholder="Apellido ..." value="{{-- old('lastname', $duenios->lastname) --}}">
				    {!! $errors->first('lastname', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
				</div>
			 </div>
			 <div class="row">
				<div class="col">
					<label for="address"> Direccion </label>
					<input class="form-control bg-light shadow-sm @error('address') is-invalid @else border-0 @enderror" name="address" placeholder="Direccion ..." value="{{-- old('address', $duenios->address) --}}">
					{!! $errors->first('address', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
				</div>
				
				<div class="col">
					<label for="phone"> Telefono </label>
					<input class="form-control bg-light shadow-sm @error('phone') is-invalid @else border-0 @enderror" name="phone" placeholder="70707070" value="{{-- old('phone', $duenios->phone) --}}">
				    {!! $errors->first('phone', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
				</div>
			 </div>
			 <div class="form-group">
				<label for="email"> Correo: </label>
				<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"  name="email" placeholder="ejemplo@example.com" value="{{-- old('email', $duenios->email) --}}">
				{!! $errors->first('email', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
			</div>

			 <div class="form-group">
				<label for="genero">Genero: </label>
				<select class="form-control @error('genero') is-invalid @else border-0 @enderror" name="genero" placeholder="Seleccionar">
					<option value="">Seleccionar</option>
				<option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : ''}}>Femenino</option>
				 <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : ''}}>Masculino</option>
				</select>
				{!! $errors->first('genero', '<small style="color: red; font-size:0.9rem; ">:message</small><br>') !!}
			  </div>
			</div>