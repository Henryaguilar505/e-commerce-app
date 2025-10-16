
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1>Productos</h1>
		<a href="{{ route('products.create') }}" class="btn btn-primary">Crear producto</a>
	</div>

	@if($products->isEmpty())
		<p>No hay productos registrados.</p>
	@else
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>Categoría</th>
						<th>Precio</th>
						<th>Stock</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($products as $product)
						<tr>
							<td style="width:120px">
								@if($product->image)
                            {{-- change here --}}
                                    <img src="{{ asset('uploads') .'/' . $product->image }}" alt="{{ $product->name }}" class="img-fluid">
								@endif
							</td>
							<td>{{ $product->name }}</td>
							<td>{{ $product->category->name ?? '—' }}</td>
							<td>${{ number_format($product->price, 2) }}</td>
							<td>{{ $product->stock }}</td>
							<td>
								<!-- acciones: editar, eliminar (implementarlas si las necesitas) -->
								<a href="#" class="btn btn-sm btn-secondary">Editar</a>
								<a href="#" class="btn btn-sm btn-danger">Eliminar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	@endif
</div>


{{-- vista para mostrar todos los productos --}}

