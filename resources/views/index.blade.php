@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	<!--start body-->
	<Section class="main-section">
		<section class="subsection">
			<article class="chapter">
				<div class="box-1">
					<img class="img-horizontal" src="static\img\portada-1.jpg" alt="Fondo del logo">
					<SPAn>Monso Cosmético Natural</SPAn>  
				</div>
			</article>
			<article class="chapter">
				<div class="box-2">

					<img src="static\img\img-2.jpg" alt="Modelo Anne">

					<div class="info-right-2">
						<span class="title">Piel suave</span>
						<p class="info">Contamos con variedad de 
							jabones artesanales para que tu pies esté siempre suave. </p>
						<Button class="view-catalogue">
							<span class="Letter-button">Ver Catálogo</span>
						</Button>
					</div>

				</div>
			</article>
			<article class="chapter">
				<div class="box-3">
					<img src="static\img\img-3.jpg" alt="Modelo Karol">

					<span class="title">Salud es cuidarse</span>
					<div class="box-p">
						<p class="info">Cuente con nuestros
							mejores productos </p>
					</div>
						
				</div>
			</article>
			<article class="chapter">
				<div class="box-4">

					<div class="info-left">
						<span class="title">Luzca bien siempre</span>
						<p class="info">Mira uno de los productos favoritos de nuestros clientes. </p>
						<Button class="view-product">
							<span class="Letter-button">Ver producto</span>
						</Button>
					</div>
					
					<img src="static\img\img-4.jpg" alt="Modelo Jack">
				</div>

			</article>
			<article class="chapter">
				<div class="box-5">
					<img src="static\img\img-5.jpg" alt="Resgístrese con nosotros">
					<span class="title">Regístrate para más información acerca 
						de nosotros</span>
					<Button class="view-register">
						<span class="Letter-button">Registrarme</span>
					</Button>
				</div>
			</article>
		</section>
	</Section>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection
