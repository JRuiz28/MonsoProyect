@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	
	<!--start body-->

	<div class="container container--contact ">
		<div class="row justify-content-center" >
			<div class="col-md-12 container__info"> 
				<form action="" class="form__contact">
					
					<div class="div__item--contact">
						<h1>Tu opinión es importante para nosotros</h1>
					</div>

					<div class="div__item--contact">
						<label class="label--contact" for="name">Nombre Completo:</label>
						<input type="text" name="name" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="email">Correo electrónico:</label>
						<input type="text" name="email" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="phone">Número de teléfono:</label>
						<input type="text" name="phone" value="" />
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="Suggert">Inconveniente:</label>
						<select id="Suggert">
							<option value="Ayuda">Ayuda</option>
							<option value="Consulta">Consulta</option>
							<option value="Sugerencia">Sugerencia</option>
							<option value="Queja">Queja</option>
						</select>
					</div>
					
					<div class="div__item--contact">
						<label class="label--contact" for="comment">Comentario:</label>
						<textarea class="textarea--contact" name="comment" id="comment" cols="30" rows="10"></textarea>
					</div>

					<button type="submit" class="button--contact"><i class="fas fa-paper-plane"></i>   Enviar</button>

					

				</form>
			</div>
		</div>
	</div>	
	
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection