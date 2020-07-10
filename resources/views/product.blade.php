@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<section class="main">
		<section class="main__container">
		<h1 class="product__title">{{ $product->name }}</h1>
			<article class="product">
				<figure class="product__imgContainer">
					<!-- <div class="product__img"></div> -->
					<img class="product__img" src="{{asset('static/img/avena.jpeg')}}" alt="Imagen de muestra del producto"/>
				</figure>
				<article class="product__detail">
					<label class="product__text"><strong>Precio:</strong></label class="text-product"><label>₡{{ $product->price }}</label>
					<label class="product__text">Cantidad:</label class="text-product"><label>{{ $product->stock }}</label>
					<label class="product__text">Estado del producto:</label class="text-product"><label>Disponible</label>
				</article>
			</article>
			<section class="description">
				<h2 class="description__title">Descripción</h2>
				<p class="description__detail"> {{ $product->description }} </p>
			</section>
			
		</section>
	</section>
	<!--End - body-->
	<!--start Footer-->
@endsection
@section('footer')
	@parent
@endsection