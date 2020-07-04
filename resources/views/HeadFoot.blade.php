<!DOCTYPE HTML>
<HTML lang="es">
<head>
	<meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monso</title>

	<!--CSS Styles-->
    <link rel="stylesheet" href="static/css/registered.css">
    <link rel="stylesheet" href="static/css//index.css">
    <link rel="stylesheet" href="static/css/footer.css">
    <link rel="stylesheet" href="static/css/nav.css">
    <link rel="stylesheet" href="static/css/about.css">
    <link rel="stylesheet" href="static/css//css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/catalogue.css">
    <link rel="stylesheet" href="static/css/registered.css">
    <link rel="stylesheet" href="static/css/registerProduct.css">
    <link rel="stylesheet" href="static/css/app.css">
    <!-- <link rel="stylesheet" href="static/css/nav.css">
	<link rel="stylesheet" href="static/css/footer.css">
	<link rel="stylesheet" href="static/css/all.min.css">
	<link rel="stylesheet" href="static/css/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/app.css">
 -->

	<!--JS-->
	<script text="text/javaScript" src="JS/index.js"></script>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    
	
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
                    <li class="nav__item ">
                        <a class="nav__link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                @else
                    @if (Route::has('register'))
                        <li class="nav__item">
                            <a class="nav__link" href="{{ url('registerUser') }}">Registro Usuario</a>
                        </li>
                    @endif

                    <li class="nav__item nav-item dropdown" >
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
    <div class="box-background-footer">
            <section class="container-info">

                <article class="item-Contact-Us">
                    <h2 class="title-foot">Contáctenos</h2>
                    <ul>
                        <li><a class="link-foot" href="#">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i></i> Whatsapp</a></li>
                        <li><a class="link-foot" href="#">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
</i> Correo electrónico</a></li>
                    </ul>
                </article>

                <article class="item-follow-us">
                    <h2 class="title-foot">Síguenos en</h2>
                    <ul>
                        <li>
                            <a class="link-foot" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i></i> Facebook</a></li>
                        <li><a class="link-foot" href="#">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
</i> Instagram</a></li>
                    </ul>
                </article>

                <article class="item-copyright">
                    <span>
                        <i class="fa fa-copyright" aria-hidden="true"></i></i> 2020 - Todos los derechos reservados.
                    </span>
                </article>

            </section>

        </div>
        <!--End - Footer-->
    </div>
    @show
</body>

</HTML>