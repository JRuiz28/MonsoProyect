@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	
	<!--start body-->
	<div class="box-content">
		<section class="container-body">
			<article>

				<img class="img-registred" src="static\img\registred.jpg" alt="">
				<div class="container-message">
					<div>
						<span class="message">Usuario guardado exitosamente. </span><i class="fas fa-laugh-beam message"></i>
					</div>
					<a href="index.html">Volver al menú principal</a>
				</div>
			
			</article>
		</section>
	</div>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection
