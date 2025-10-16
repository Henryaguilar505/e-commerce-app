

<div class="container">
	<h1>Crear producto</h1>

	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
		@csrf

		<div class="mb-3">
			<label for="name" class="form-label">Nombre</label>
			<input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
		</div>

		<div class="mb-3">
			<label for="description" class="form-label">Descripción</label>
			<textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
		</div>

		<div class="mb-3">
			<label for="price" class="form-label">Precio</label>
			<input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
		</div>

		<div class="mb-3">
			<label for="stock" class="form-label">Stock</label>
			<input type="number" class="form-control" id="stock" name="stock" value="{{ old('stock') }}" required>
		</div>

		<div class="mb-3">
			<label for="categories_id" class="form-label">Categoría</label>
			<select name="categories_id" id="categories_id" class="form-control" required>
				<option value="">-- Selecciona una categoría --</option>
				@foreach($categories as $category)
					<option value="{{ $category->id }}" {{ old('categories_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
				@endforeach
			</select>
		</div>

		<div class="mb-3">
			<label for="image" class="form-label">Imagen</label>
			<input type="file" class="form-control" id="image" name="image" accept="image/*" required>
		</div>

		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>
</div>



