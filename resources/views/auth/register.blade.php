@extends('HeadFoot')

@section('header')
    @parent
@endsection
@section('content')
	<!--End - Navbars-->
	
    <!--start body-->
    <section class="main">
		<section class="main__img">
			@if (session('status'))
				<div class="alert alert-success fade show" role="alert">
					{{ session('status') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
			<section class="register" >
				<div class=" register__exit login__exit--button"><a class="login__exit--link" href="{{ url('/') }}"><i class="fas fa-times-circle exit-button-i"></i></a></div>
				<h1 class="register__title">Registro de Usuarios del Sistema</h1>
					<section class="register__content">

					<form class="register__form" method="POST" action="{{ url('register') }}">
						@csrf

						<!-- <div class="form-group row"> -->
							<!-- <label for="role" class="col-md-4 col-form-label text-md-right">Rol</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="role" type="text" class=" register__text @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus placeholder="Rol">

								@error('role')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div> -->
						<!-- </div> -->

						<!-- <div class="form-group row"> -->
							<!-- <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="name" type="text" class=" register__text @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div> -->
						<!-- </div> -->

						<!-- <div class="form-group row"> -->
							<!-- <label for="surname" class="col-md-4 col-form-label text-md-right">Apellidos</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="surname" type="text" class= "register__text @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="Apellidos">

								@error('surname')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div> -->
						<!-- </div> -->
						
						<!-- <div class="form-group row"> -->
							<!-- <label for="birth_date" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="birth_date" type="date" class= "register__text @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus placeholder="Fecha de nacimiento">

								@error('birth_date')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div> -->
						<!-- </div> -->

						<!-- <div class="form-group row"> -->
							<!-- <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="email" type="email" class= "register__text @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div>
						</div> -->

						<!-- <div class="form-group row"> -->
							<!-- <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="password" type="password" class= "register__text @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- </div>
						</div> -->

						<!-- <div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label> -->

							<!-- <div class="col-md-6"> -->
								<input id="password-confirm" type="password" class= "register__text" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
							<!-- </div> -->
						<!-- </div> -->
	<!-- 
						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4"> -->
								<button type="submit" class="register__btn">Registrar</button>
							<!-- </div>
						</div> -->
					</form>
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