@extends('layouts.app')

@section('content')

<<<<<<< HEAD
<section class="main">		
    <section class="login">
        <form action="#" class="login__form">
            <div class="login__exit--button"> <a href="{{ url('/') }}" class="login__exit--link"><i class="fas fa-times-circle exit-button-i"></i> </a> </div>
            <h1 class="login__form--title">Cuenta Monso</h1>
            <input class="login__form--text" type="email" name="txtEmail" placeholder="Correo electrónico">
            <input  class="login__form--text" type="password" name="txtPassword" placeholder="Contraseña">
            <input class="login__form--submit" type="submit" value="Iniciar Sesión">
        </form>
    </section>
=======
<section class="main">
    
	<section class="login">
		<form action="#" class="login__form">
            <div class="login__exit--button"><a class="login__exit--link" href="{{ url('/') }}"><i class="fas fa-times-circle exit-button-i"></i></a></div>
            
            <h1 class="login__form--title">Cuenta Monso</h1>
            
            <input class="login__form--text" type="email" name="txtEmail" placeholder="Correo electrónico">
            
            <input  class="login__form--text" type="password" name="txtPassword" placeholder="Contraseña">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

			<input class="login__form--submit" type="submit" value="Iniciar Sesión">
		</form>
	</section>
>>>>>>> rm_Negro
</section>

@endsection
