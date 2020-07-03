@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	<!--start body-->
	<div class="container-product" style=" background: url('img/back-register.jpg')">
		<form class="form">
			<h1 class="form__title">Registro de producto</h1>
			<div class="container-code">
				<input class="input" type="text" placeholder="Código de producto">
				<button type="submit" text="Buscar" class="btn-action"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Buscar</button>
				<button type="button" text="Limpiar" class="btn-action"><i class="fa fa-eraser" aria-hidden="true"></i>&nbsp;Limpiar</button>
			</div>
			<div class="product-name">
				<input class="input" type="text" placeholder="Nombre de producto">
			</div>
			<div class="container-table">
				<input class="input" type="text" placeholder="Ingredientes">
				<button type="submit" text="Agregar" class="btn-add"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar</button>
				<table class="table">
					<tr>
						<td>
							Ingredientes
						</td>
						<td>
							Cantidad
						</td>
					</tr>
				</table>
			</div>
			<div class="description">
				<input class="input" type="text" placeholder="Descripción">
			</div>
			<div class="cantity">
				<select class="select" id="cantidad" name="cantidad">
					<option value="-1">Cantidad</option>
					<?php for($i = 0; $i <= 50; $i++): ?>
						<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
					<?php endfor; ?>
				</select>
			</div>
			<div class="price">
				<select class="select" id="precio" name="precio">
					<option value="-1">Precio</option>
					<?php for($i = 0; $i <= 10000; $i+=500): ?>
						<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
					<?php endfor; ?>
				</select>		
			</div>
			<div class="upload-image">
				<input  class="input" type="text" placeholder="Subir imagen">
				<button class="button" type="button" text="Examinar">Examinar</button>
			</div>
			<div class="action-buttons">
				<button class="button" type="submit" text="Registrar">Registrar</button>
				<button class="button" type="submit" text="Modificar">Modificar</button>
				<button class="button" type="submit" text="Eliminar">Eliminar</button>
			</div>
		</form>
	</div>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection