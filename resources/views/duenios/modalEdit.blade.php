@csrf

<input type="hidden" name="id" id="id">
     <div class="form-group">
       <label for="ci"> Ci: </label>
       <input class="form-control bg-light shadow-sm @error('ci') is-invalid @else border-0 @enderror" id="ci" name="ci" placeholder="Celula de Identidad ..." value="{{-- old('ci', $duenios->ci) --}}">
  </div>

<div class="row">
   <div class="col">
       <label for="name"> Nombre </label>
       <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" id="name" name="name" placeholder="Nombre ..." value="{{-- old('name', $duenios->name) --}}">

   </div>
   <div class="col">
       <label for="lastname"> Apellido </label>
       <input class="form-control bg-light shadow-sm @error('lastname') is-invalid @else border-0 @enderror" id="lastname" name="lastname" placeholder="Apellido ..." value="{{-- old('lastname', $duenios->lastname) --}}">
   </div>
</div>
<div class="row">
   <div class="col">
       <label for="address"> Direccion </label>
       <input class="form-control bg-light shadow-sm @error('address') is-invalid @else border-0 @enderror" id="address" name="address" placeholder="Direccion ..." value="{{-- old('address', $duenios->address) --}}">	</div>
   <div class="col">
       <label for="phone"> Telefono </label>
       <input class="form-control bg-light shadow-sm @error('phone') is-invalid @else border-0 @enderror" id="phone" name="phone" placeholder="70707070" value="{{-- old('phone', $duenios->phone) --}}">
   </div>
</div>
<div class="form-group">
   <label for="email"> Correo: </label>
   <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" id="email" name="email" placeholder="ejemplo@example.com" value="{{-- old('email', $duenios->email) --}}">
</div>

<div class="form-group">
   <label for="genero">Genero: </label>
   <select class="form-control @error('genero') is-invalid @else border-0 @enderror" id="genero" name="genero" placeholder="Seleccionar">
       <option value="">Seleccionar</option>
   <option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : ''}}>Femenino</option>
    <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : ''}}>Masculino</option>
   </select>
 </div>
</div>
