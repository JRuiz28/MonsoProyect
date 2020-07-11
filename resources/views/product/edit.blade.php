@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	<!--start body-->
	@if (session('status'))
		<div class="alert alert-success fade show" role="alert">
			{{ session('status') }}
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	@endif

	<!--End - body-->
	 <section class="header">
		<article class="container__form">
			<div class="container__form--img">

				<div class="bg__product"></div>
					
				<form class="form form__product" method="POST" 
				action="{{ url('product/update/'.$product->id )}}"
				enctype="multipart/form-data">
					@method('PUT')
					@csrf
					
					<button  onclick="location.href='{{ url('back') }}'" title="Volver a lista de producto" data-toggle="tooltip" 
					type="button" class="btn btn-danger button__back"><i class="fas fa-arrow-alt-circle-left"></i></button>

					<span class="form__title">Editar producto</span>
					
					<div class="product-name">
						<input value="{{ old('name', $product->name ) }}" class="form__input" type="text" placeholder="Nombre de producto" name="nameP" id="name">
					</div>


					<div class="form__description">
						<input class="form__input"  value="{{ old('description', $product->description ) }}" type="text" placeholder="Descripción" name="description">
					</div>


					<div class="form__quantity">
						<select class="form__select" id="quantity" name="stock">
							<option value="{{ old('stock', $product->stock ) }}">Cantidad</option>
							<?php for($i = 0; $i <= 100; $i++): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>
					</div>


					<div class="form__price">
						<select class="form__select" id="price" name="price">
							<option value="{{ old('price', $product->price ) }}">Precio</option>
							<?php for($i = 495; $i <= 13000; $i+=500): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>		
					</div>


					<div class="form__upload-image" >
						<input class="form__input" value="{{ old('image_path') }}" type="file" placeholder="Subir imagen" name="image_path" />
					</div>

					<div class="form__action-buttons">
						<button class="form__button" type="submit" text="Modificar">Modificar</button>
					</div>
				</form>
			</div>
		</article>
	</section>
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection