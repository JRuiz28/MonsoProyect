@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<section class="section">
		<article class="article">
			<h1 class="article__title-product">Jabón Manzanilla y miel</h1>
			<img class="article__img-product" src="static/img/avena.jpeg" alt="Imagen de muestra del producto"/>
		</article>
		<div class="container-dataProduct">
			<label class="text-product">Precio:</label>&nbsp;<label>₡5.000</label>
			<label class="text-product">Cantidad:</label>&nbsp;<label>100</label>
			<label class="text-product">Estado del producto:</label>&nbsp;<label>Disponible</label>
		</div>
		<div class="container-description">
			<h2 class="container-desc__subtitle-description">Descripción</h2>
			<p class="container-desc__paragraph">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, temporibus quod. 
				Amet, quo cum doloribus earum harum excepturi, a ducimus autem alias quisquam explicabo, 
				quaerat odio? Sunt impedit praesentium voluptas!
			</p>
		</div>
		<section class="related-products">
			<div class="cointainer-related cointainer-related--left">
				<img class="container-related__img" src="static/img/avena.jpeg" alt="Productos relacionados"/>
				<button class="container-related">Ver más</button>
			</div>
			<div class="cointainer-related cointainer-related--center">
				<img class="container-related__img" src="static/img/avena.jpeg" alt="Productos relacionados"/>
				<button class="container-related">Ver más</button>
			</div>
			<div class="cointainer-related cointainer-related--right">
				<img class="container-related__img" src="static/img/avena.jpeg" alt="Productos relacionados"/>
				<button class="container-related">Ver más</button>
			</div>
		</section>
	</section>
	<!--End - body-->
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection