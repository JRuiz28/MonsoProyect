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

					<img src="static/img/avena.jpeg" alt="">
                    <h1>Avena</h1>
                    <p>Jabón natural para piel seca y cuidada.</p>
					<button>Ver más</button>
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