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
				<img class="item__form--img" src={{ asset('static/img/back-register.jpg') }} alt="Imagen de fondo">
					
				<div class="bg__product"></div>
			<form class="form form__product" action="{{ url('registerProduct')}}" method="POST">
					@csrf

					<span class="form__title">Registro de producto</span>
					
					<div class="form__productCode">
						<input type="text" class="form__input form_input" placeholder="Código de producto" name="id" id="id">
						<button type="button" text="Buscar" class="form__button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Buscar</button>
						<button type="button" text="Limpiar" class="form__button"><i class="fa fa-eraser" aria-hidden="true"></i>&nbsp;Limpiar</button>
					</div>
					
					<div class="product-name">
						<input class="form__input" type="text" placeholder="Nombre de producto" name="name" id="name">
					</div>
					<div class="table-ingredients">
						
						<select class="form__select" name='ingredients_id' id="selectIngredient_id" required>
							{{-- @ foreach($ingredients as $ingredient)
								<option value="{{$ingredient['id']}}">{{$ingredient['name']}}</option>
							@ endforeach  --}}
						</select>
						<button type="submit" text="Agregar" {{ url('registre/addIngre') }} class="form__button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar</button>

						<table class="display form__table" cellspacing="0">
							<thead>
								<tr>
									<th class="form__table--title text-center">Ingrediente</th>
									<th class="form__table--title text-center">Acción</th>
								</tr>
							</thead>
							<tbody>
								{{-- @ foreach($product_ingredients as $product_ingredient)
									<tr>
										<td class="text-center"> {{ $product_ingredient->ingredient_id }} </td>
										<td class="text-center"> 
											<button type="button" text="Quitar" class="form__button">Quitar</button>	
										</td>
									
									</tr>
								@ endforeach  --}}
							  </tbody>
						</table>

					</div>
					<div class="form__description">
						<input class="form__input" type="text" placeholder="Descripción" name="description">
					</div>
					<div class="form__quantity">
						<select class="form__select" id="quantity" name="stock">
							<option value="-1">Cantidad</option>
							<?php for($i = 0; $i <= 50; $i++): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>
					</div>
					<div class="form__price">
						<select class="form__select" id="price" name="price">
							<option value="-1">Precio</option>
							<?php for($i = 0; $i <= 10000; $i+=500): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>		
					</div>
					<div class="form__upload-image">
						<input class="form__input" type="text" placeholder="Subir imagen" name="image_path	">
						<button class="form__button" type="button" text="Examinar">Examinar</button>
					</div>
					<div class="form__action-buttons">
						<button class="form__button" type="submit" text="Registrar">Registrar</button>
						<button class="form__button" type="button" text="Modificar">Modificar</button>
						<button class="form__button" type="button" text="Eliminar">Eliminar</button>
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