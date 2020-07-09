@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<div class="container container__body"> <!-- container__body is A SCSS CLASS -->
	
    <div class="row justify-content-center" >
		<div class="container__list col-md-12"> <!-- container__list is A SCSS CLASS -->
		
		@if (session('status'))
						<div class="alert alert-success fade show" role="alert">
							{{ session('status') }}
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					@endif
				<div class="div__container--titleList text-center"> <!-- SECONDS CLASS (text-center) IS BOOTSTRAP  -->
					<h1 class="h1--title" >Lista de productos</h1>
				</div>

				<div class="div__container--addProduct text-right">  <!-- SECONDS CLASS (text-rigth) IS BOOTSTRAP  -->
					<a class="btn btn-success btn-xs" href="{{ url('product/create') }}">Agregar producto</a>
				</div>

				<table class="table table-bordered" id="table">  <!-- IT'S A BOOTSTRAP-CLASS  -->
					<thead>
					<tr>
						<th class="text-center">Nombre</th>
						<th class="text-center">Cantidad</th>
						<th class="text-center">Precio</th>
						<th class="text-center">Acción </th>
					</tr>
					</thead>
					<tbody>
					@foreach($products as $product)
						<tr>
							<td class="text-center">{{ $product->name }}</td>
							<td class="text-center">{{ $product->stock }}</td>
							<td class="text-center">{{ $product->price }}</td>
							
								<td class="text-center"> <!-- SECONDS CLASS (text-center) IS BOOTSTRAP  -->

									<a href="{{ url('product/edit/'.$product->id) }}" class="button__list btn btn-info btn-xs" name="Editar">
										<i class="fas fa-edit"></i>
									</a>

									<a href="{{ url('product/delete/'.$product->id) }}"  type="button" class="button__list btn btn-danger btn-xs" name="Eliminar">
										<i class="fas fa-trash-alt"></i>
									</a>
									
								</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				{{ $products->links() }}
		</div>
	</div>
</div>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection