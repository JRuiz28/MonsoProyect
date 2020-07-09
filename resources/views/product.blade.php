@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<section class="main">
		<section class="main_container">
			<h1 class="product_title">Jabón Manzanilla y miel</h1>
			<article class="product">
				<figure class="product__imgContainer">
					<!-- <div class="product__img"></div> -->
					<img class="product__img" src="{{asset('static/img/avena.jpeg')}}" alt="Imagen de muestra del producto"/>
				</figure>
				<article class="product__detail">
					<label class="product__text">Precio:</label class="text-product"><label>₡5.000</label>
					<label class="product__text">Cantidad:</label class="text-product"><label>100</label>
					<label class="product__text">Estado del producto:</label class="text-product"><label>Disponible</label>
				</article>
			</article>
			<div class="container-description">
				<h2 class="container-desc__subtitle-description">Descripción</h2>
				<p class="container-desc__paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, temporibus quod. 
					Amet, quo cum doloribus earum harum excepturi, a ducimus autem alias quisquam explicabo, 
					quaerat odio? Sunt impedit praesentium voluptas!
				</p>
			</div>
			<section class="related-products">
				<h2 class="product_subtitle">Productos relacionados<h2>
				<!-- <div class="cointainer-related cointainer-related--left">
					<img class="container-related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
					<button class="container-related__button">Ver más</button>
				</div>
				<div class="cointainer-related cointainer-related--center">
					<img class="container-related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
					<button class="container-related__button">Ver más</button>
				</div>
				<div class="cointainer-related cointainer-related--right">
					<img class="container-related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
					<button class="container-related__button">Ver más</button>
				</div> -->
			</section>
		</section>
	</section>
	<!--End - body-->
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection