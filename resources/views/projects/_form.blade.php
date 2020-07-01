	@csrf
	<div class="form-group">
	<label for="title">
		Titulos del Proyecto<br>
		<input class="form-control border-0 bg-light shadow-sm" id="title" type="text" name="title" value="{{ old('title', $project->title) }}">
	</label>
	</div>
	<br>
	<div class="form-group">
	<label for="url">
		URL del Proyecto<br>
		<input class="form-control border-0 bg-light shadow-sm" id="url" type="text" name="url" value="{{ old('url', $project->url) }}">
	</label>
	</div>
	<br>
	<div class="form-group">
	<label for="description">
		Descripcion del Proyecto<br>
		<textarea class="form-control border-0 bg-light shadow-sm" id="description" name="description">{{ old('description', $project->description) }}</textarea>
	</label>
	</div>
	<br>
	<button class="btn btn-primary btn-large btn-block">{{ $btnText }}</button>
	<a href="{{ route('projects.index') }}"> Cancelar </a>