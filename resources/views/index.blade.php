@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	<!--start body-->
	<section class="container--index">
		<article class="article__index article__index--1">
			<div class="container__article container__article--1">
				<img class="container__item--img1" src="static\img\portada-1.jpg" alt="Imagen de fondo">
				<span class="container__item--title1" >Monso Cosmético Natural</span> 
			</div>
		</article>

		<article class="article__index article__index--2">
			<div class="container__article container__article--2">
				
				<img class="container__item--img2" src="static\img\img-2.jpg" alt="Modelo Anne">

				<div class="container__item--info2">
					<span class="container__item--title2">Piel suave</span>
					<p class="container__item--paragraph">
						Contamos con variedad de jabones artesanales para que tu pies esté siempre suave. </p>
					<Button onclick="location.href='{{ url('catalogue') }}'" class="container__item--button1">
						<span class="container__item--text--button">Ver Catálogo</span>
					</Button>
				</div>
			</div>
		</article>
		
		<article class="article__index article__index--3">
			<div class="container__article container__article--3">
				<img class="container__item--img3" src="static\img\img-3.jpg" alt="Modelo Karol">

				<span class="container__item--title container__item--title3">Salud es cuidarse</span>
				<div class="container__item--container--p3">	
					<p class="container__item--paragraph container__item--p3">Cuente con nuestros
						mejores productos </p>
				</div>
					
			</div>
		</article>
		<article class="article__index article__index--4">
			<div class="container__article container__article--4">

				<div class="container__item--container--left">
					<span class="container__item--title article__item--title4">Luzca bien siempre</span>
					<p class="container__item--paragraph article__item--p4">Mira uno de los productos favoritos de nuestros clientes. </p>
					<Button onclick="location.href='{{ url('catalogue') }}'" class="container__item--button1">
						<span class="container__item--text--button">Ver producto</span>
					</Button>
				</div>
				
				<img class="container__item--img4" src="static\img\img-4.jpg" alt="Modelo Jack">
			</div>
		</article>
		<article class="article__index article__index--5">
				<div class="container__article--5">
					<img class="container__item--img5" src="static\img\img-5.jpg" alt="Regístrese con nosotros">
					<span class="container__item--title container__item--title5">Escríbanos para más información acerca 
						de nosotros</span>
					<button onclick="location.href='{{ url('contact') }}'" class="container__item--button2">
						<span class="container__item--text--button2">Consultar</span>
						</button>
				</div>
		</article>
	</section>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection
