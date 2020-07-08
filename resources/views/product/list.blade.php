@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	
	<!--start body-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
						
				@if (session('status'))
					<div class="alert alert-success fade show" role="alert">
						{{ session('status') }}
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif


				<div class="text-center">
					<h1>Lista de productos</h1>
				</div>

				<div class="text-right" style="margin: 20px 3px;">
					<a href="{{ url('product/create') }}">Agregar producto</a>
				</div>

				<table class="table table-bordered" id="MyTable">
					<thead>
					<tr>
						<th class="text-center">ID</th>
						<th class="text-center">Nombre</th>
						<th class="text-center">Descripción</th>
						<th class="text-center">Cantidad</th>
						<th class="text-center">Precio</th>
						<th class="text-center">Action </th>
					</tr>
					</thead>
					<tbody>
					@foreach($products as $product)
						<tr>
							<td class="text-center">{{ $product->id }}</td>
							<td class="text-center">{{ $product->name }}</td>
							<td class="text-center">{{ $product->description }}</td>
							<td class="text-center">{{ $product->stock }}</td>
							<td class="text-center">{{ $product->price }}</td>
							
								<td class="text-center">
									<a href="{{ url('product/edit/'.$product->id) }}" class="btn btn-info btn-xs">
										<span aria-hidden="true">Modificar</span>
									</a>
									<a href="{{ url('product/delete/'.$product->id) }}"  type="button" class="btn btn-danger btn-xs" >
										<span aria-hidden="true">Eliminar</span>
									</a>
									
								</td>
						</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>
</div>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection