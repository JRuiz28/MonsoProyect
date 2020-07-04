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
				<img class="item__article--img1" src="static\img\portada-1.jpg" alt="Imagen de fondo">
				<span class="item__article--title1" >Monso Cosmético Natural</span> 
			</div>
		</article>
		<article class="article__index article__index--2">
			<div class="container__article container__article--2">
				
				<img class="item__article--img2" src="static\img\img-2.jpg" alt="Modelo Anne">

				<div class="item__article--info2">
					<span class="item__article--title">Piel suave</span>
					<p class="item__article--p">
						Contamos con variedad de jabones artesanales para que tu pies esté siempre suave. </p>
					<Button class="item__article--button1">
						<span class="item__article--text--button">Ver Catálogo</span>
					</Button>
				</div>
			</div>
		</article>
		<article class="article__index article__index--3">
			<div class="container__article container__article--3">
				<img class="item__article--img3" src="static\img\img-3.jpg" alt="Modelo Karol">

				<span class="item__article--title item__article--title3">Salud es cuidarse</span>
				<div class="item__article--container--p3">	
					<p class="item__article--p item__article--p3">Cuente con nuestros
						mejores productos </p>
				</div>
					
			</div>
		</article>
		<article class="article__index article__index--4">
			<div class="container__article container__article--4">

				<div class="item__article--container--left">
					<span class="item__article--title item__article--title4">Luzca bien siempre</span>
					<p class="item__article--p item__article--p4">Mira uno de los productos favoritos de nuestros clientes. </p>
					<Button class="item__article--button1">
						<span class="item__article--text--button">Ver producto</span>
					</Button>
				</div>
				
				<img class="item__article--img4" src="static\img\img-4.jpg" alt="Modelo Jack">
			</div>
		</article>
		<article class="article__index article__index--5">
				<div class="container__article--5">
					<img class="item__article--img5" src="static\img\img-5.jpg" alt="Resgístrese con nosotros">
					<span class="item__article--title item__article--title5">Regístrate para más información acerca 
						de nosotros</span>
					<Button class="item__article--button2">
						<span class="item__article--text--button2">Registrarme</span>
					</Button>
				</div>
		</article>
	</section>
	<!--End - body-->
	
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection
