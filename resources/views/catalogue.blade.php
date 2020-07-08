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
				<div class="item">

					<img class="item__img-catalogue" src="static/img/avena.jpeg" alt="">
                    <h1 class="item__title-catalogue">Avena</h1>
                    <p class="item__paragraph-catalogue">Jabón natural para piel seca y cuidada.</p>
					<button class="item__button-catalogue">Ver más</button>
				</div>
			</div>
			
		</article>
	</section>
	<!--End - body-->
	
	<!--start Footer-->
	@endsection
	@section('footer')
		@parent
	@endsection
