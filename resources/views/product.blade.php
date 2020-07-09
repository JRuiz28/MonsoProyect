@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<section class="main">
		<section class="main__container">
			<h1 class="product__title">Jabón Manzanilla y miel</h1>
			<article class="product">
				<figure class="product__imgContainer">
					<!-- <div class="product__img"></div> -->
					<img class="product__img" src="{{asset('static/img/avena.jpeg')}}" alt="Imagen de muestra del producto"/>
				</figure>
				<article class="product__detail">
					<label class="product__text"><strong>Precio:</strong></label class="text-product"><label>₡5.000</label>
					<label class="product__text">Cantidad:</label class="text-product"><label>100</label>
					<label class="product__text">Estado del producto:</label class="text-product"><label>Disponible</label>
				</article>
			</article>
			<section class="description">
				<h2 class="description__title">Descripción</h2>
				<p class="description__detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia, temporibus quod. 
					Amet, quo cum doloribus earum harum excepturi, a ducimus autem alias quisquam explicabo, 
					quaerat odio? Sunt impedit praesentium voluptas! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, repudiandae asperiores. Incidunt asperiores, consequatur sunt cupiditate quis tenetur laboriosam dicta magnam beatae quam dolore pariatur quaerat nostrum? Nam, magni debitis!
				</p>
			</section>
			<section class="related">
				<h2 class="related__title">Productos relacionados<h2>
				<section class="related__container">
					<section class="related__product">
						<figure class="related__imgContainer">
							<img class="related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
							<button class="related__btn">Ver más</button>
						</figure>
					</section>
					<section class="related__product">
						<figure class="related__imgContainer">
							<img class="related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
							<button class="related__btn">Ver más</button>
						</figure>
					</section>
					<section class="related__product">
						<figure class="related__imgContainer">
							<img class="related__img" src={{asset('static/img/avena.jpeg')}} alt="Productos relacionados"/>
							<button class="related__btn">Ver más</button>
						</figure>
					</section>
				</section> 
			</section>
		</section>
	</section>
	<!--End - body-->
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection