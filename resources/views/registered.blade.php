@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	
	<!--start body-->
	<div class="container-registered">
		<section class="container-body-registered">
			<article class="article-registered">
				<img class="article__img-registered" src="static\img\registred.jpg" alt="">
				<div class="container__message-registered">
						<span class="message-registered">Usuario guardado exitosamente. </span><i class="fas fa-laugh-beam message"></i>
					<a class="container__link-registered" href="index.html">Volver al menú principal</a>
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
