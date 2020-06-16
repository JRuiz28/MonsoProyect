<?php
	require('Header.php');
	echo '<link rel="stylesheet" href="CSS/registerProduct.css">';
?>
	<!--End - Navbars-->

	<!--start body-->
	<div class="div-form-product">
		<form>
			<h1>Registro de producto</h1>
			<input type="text" placeholder="Código de producto">
			<button type="submit" text="Buscar">Buscar</button>
			<button type="button" text="Limpiar">Limpiar</button>
			<input type="text" placeholder="Nombre de producto">
			<input type="text" placeholder="Ingredientes">
			<button type="submit" text="Agregar">Agregar</button>

			<input type="text" placeholder="Descripción">
			<select id="cantidad" name="cantidad">
				<option value="-1">Cantidad</option>
				<?php for($i = 0; $i <= 50; $i++): ?>
					<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
				<?php endfor; ?>
			</select>
			<select id="precio" name="precio">
			<option value="-1">Precio</option>
				<?php for($i = 0; $i <= 10000; $i+=500): ?>
					<option value= "<?php echo $i; ?>"> <?php echo $i; ?> </option>
				<?php endfor; ?>
			</select>
			<input type="text" placeholder="Subir imagen">
			<button type="button" text="Examinar">Examinar</button>
			<button type="submit" text="Registrar">Registrar</button>
			<button type="submit" text="Modificar">Modificar</button>
			<button type="submit" text="Eliminar">Eliminar</button>
		</form>
	</div>
	<!--End - body-->
	
	<!--start Footer-->
<?php
	require('Footer.php');
?>