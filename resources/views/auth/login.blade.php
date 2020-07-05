@extends('layouts.app')

@section('content')

<section class="main">
    
	<section class="login">
       <form method="POST" action="{{ route('login') }}" class="login__form">
            @csrf

            <div class="login__exit--button"><a class="login__exit--link" href="{{ url('/') }}"><i class="fas fa-times-circle exit-button-i"></i></a></div>
            
            <h1 class="login__form--title">Cuenta Monso</h1>

            <input id="email" class="login__form--text form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required autocomplete="email" autofocus>
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="password" class="login__form--text form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

			<input class="login__form--submit" type="submit" value="Iniciar Sesión">
		</form>
	</section>
</section>

@endsection
