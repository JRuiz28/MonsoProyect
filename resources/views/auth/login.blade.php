@extends('layouts.app')

@section('content')

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
</section>

@endsection
