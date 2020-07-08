@extends('HeadFoot')
@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->

	
	<!--start body-->
	<section class="container-body">
		<article class="center-body">
			<span class="title-catalogue">Catálogo</span>
			<div class="box-products">
				@foreach($products as $product)
					
				<div class="item">
					
						<img class="item__img-catalogue" src="{{$product['image_path']}}" alt="">
						<h1 class="item__title-catalogue">{{$product['name']}}</h1>
						<p class="item__paragraph-catalogue">{{$product['description']}}</p>
						<button class="item__button-catalogue" value="{{$product['id']}}">Ver más</button>

				</div>
				
				@endforeach  
					
			</div>
			
		</article>
	</section>
	<!--End - body-->
	
	<!--start Footer-->
	@endsection
	@section('footer')
		@parent
	@endsection
