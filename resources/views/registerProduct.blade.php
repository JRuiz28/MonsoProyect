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

	<section class="header">
		<article class="container__form">
			<div class="container__form--img">
				<img class="item__form--img" src="static/img/back-register.jpg" alt="Imagen de fondo">
					
				<div class="bg__product"></div>
			<form class="form form__product" action="{{ url('registerProduct')}}" method="POST">
					@csrf

					<span class="form__title">Registro de producto</span>
					
					<div class="form__productCode">
						<input type="text" class="form__input form__input" placeholder="Código de producto">
						<button type="button" text="Buscar" class="form__button"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Buscar</button>
						<button type="button" text="Limpiar" class="form__button"><i class="fa fa-eraser" aria-hidden="true"></i>&nbsp;Limpiar</button>
					</div>
					
					<div class="product-name">
						<input class="form__input" type="text" placeholder="Nombre de producto">
					</div>
					<div class="table-ingredients">
						<input class="form__input" type="text" placeholder="Ingredientes">
						<button type="submit" text="Agregar" class="form__button"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar</button>

						<table class="display form__table" cellspacing="0">
							<thead>
								<tr>
									<th class=" form__table--title">Ingrediente</th>
									<th class=" form__table--title">Acción</th>
								</tr>
							</thead>
					
							<tfoot>
								<tr>
									<th>Avena</th>
									<th> <button type="button" class="form__button">Quitar</button> </th>
								</tr>
							</tfoot>
						</table>

					</div>
					<div class="form__description">
						<input class="form__input" type="text" placeholder="Descripción">
					</div>
					<div class="form__quantity">
						<select class="form__select" id="quantity" name="cantidad">
							<option value="-1">Cantidad</option>
							<?php for($i = 0; $i <= 50; $i++): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>
					</div>
					<div class="form__price">
						<select class="form__select" id="price" name="precio">
							<option value="-1">Precio</option>
							<?php for($i = 0; $i <= 10000; $i+=500): ?>
								<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
							<?php endfor; ?>
						</select>		
					</div>
					<div class="form__upload-image">
						<input class="form__input" type="text" placeholder="Subir imagen">
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
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection