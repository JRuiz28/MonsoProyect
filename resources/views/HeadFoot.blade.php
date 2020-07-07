<!DOCTYPE HTML>
<HTML lang="es">
<head>
	<meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monso</title>

	<!--CSS Styles-->
    <link rel="stylesheet" href="/css/main.css">

	<!--JS-->    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4251707850.js" crossorigin="anonymous"></script>
    
	
    <!--Others-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>    <!--Start Navbars-->
    @section('header')
	<header>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item nav__item--logo"> <a class="nav__link" href="{{ url('/') }}"> Monso </a> </li> 
                
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('/') }}"> Inicio </a> </li>
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('catalogue') }}"> Catálogo </a> </li>
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('about') }}"> Acerca de </a> </li>
           
                @guest
                    <li class="nav__item nav__item--login">
                        <a class="nav__link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                @else
                    @if (Route::has('register'))
                        <li class="nav__item ">
                            <a class="nav__link" href="{{ url('registerUser') }}">Registro Usuario</a>
                        </li>
                    @endif

                    <li class="nav__item nav-item dropdown nav__item--login" >
                        <a class="nav__link nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest

            </ul>
        </nav>
    </header>
    @show
    <div class="content">
        @yield('content')
    </div>

@section('footer') 

<div class="footer">

    <section class="footer">
        <article class="footer__left">
            <h1 class="footer__title footer__title--left">Contáctenos</h1>
            <ul class="footer__list footer__list--left">
                <li class="footer__item footer__item--left"> <a class="footer__link" href="https://api.whatsapp.com/send?phone=+50672017750" target="_blank"> 
                    <i class="fab fa-whatsapp"></i> <span class="footer__link--text">WhatsApp</span></a> 
                </li>
                <li class="footer__item footer__item--left"> <a class="footer__link" href="mailto:monso.cosmetica.natural@gmail.com"> 
                    <i class="fas fa-envelope"></i> <span class="footer__link--text">Correo electrónico</span></a> 
                </li>
            </ul>
        </article>
        <article class="footer__right">
            <h1 class="footer__title footer__title--right">Síganos en</h1>
            <ul class="footer__list footer__list--right">
                <li class="footer__item footer__item--right"> <a class="footer__link" href="https://www.facebook.com/monsocosmeticanatural/" target="_blank"> 
                    <i class="fab fa-facebook"></i> <span class="footer__link--text">Facebook</span></a> 
                </li>
                <li class="footer__item footer__item--right"> <a class="footer__link" href="https://www.instagram.com/monso.cosmetica.natural/" target="_blank"> 
                    <i class="fab fa-instagram"></i> <span class="footer__link--text">Instagram</span></a>
                </li>
            </ul>
        </article>
        <article class="footer__end">
            <h5 class="footer__end--menssage">Todos los derechos reservados.</h5>
            <h6 class="footer__end--menssage">&copy; 2020 </h6>
        </article>
    </section>

        <!--End - Footer-->
    </div>
    @show
</body>

</HTML>