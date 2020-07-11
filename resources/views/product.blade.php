@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	<!--start body-->
	<section class="main">
		<section class="main__container">
		
		<div class="button__container--product">			
			<button  onclick="location.href='{{ url('catalogue') }}'" type="button" class="btn btn-danger button__back" style="width: 50px" title="Volver al catálogo" data-toggle="tooltip" > 
				<i class="fas fa-arrow-alt-circle-left"></i></button>
		</div>

		<h1 class="product__title">{{ $product->name }}</h1>
			<article class="product">
				<section class="product__container">
					<figure class="product__imgContainer">
						<!-- <div class="product__img"></div> -->
						<img class="product__img" src="/{{ $product->image_path }}" alt="Imagen de muestra del producto"/>
					</figure>
					<article class="product__detail">
						<label class="product__text">Precio: <label class="product__information">₡{{ $product->price }}</label></label>
						<label class="product__text">Cantidad: <label class="product__information">{{ $product->stock }}</label></label>
					</article>
				</section>
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