<!DOCTYPE HTML>
<HTML lang="es">
<head>
	<meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monso</title>

	<!--CSS Styles-->
	<link rel="stylesheet" href="static/css/nav.css">
	<link rel="stylesheet" href="static/css/footer.css">
	<link rel="stylesheet" href="static/css/all.min.css">
	<link rel="stylesheet" href="static/css/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/index.css">

	<!--JS-->
	<script text="text/javaScript" src="JS/index.js"></script>     
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css"
	></script>
	
	
    <!--Others-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<!--Start Navbars-->
	<header>
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item nav__item--logo"> <a class="nav__link" href="{{ url('/') }}"> Monso </a> </li> 
                
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('/') }}"> Inicio </a> </li>
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('catalogue') }}"> Catálogo </a> </li>
                <li class="nav__item nav__item--link"> <a class="nav__link" href="{{ url('about') }}"> Acerca de </a> </li>
           
                @guest
                    <li class="nav__item">
                        <a class="nav__link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <!--
                    @ if (Route::has('register'))
                        <li class="nav__item">
                            <a class="nav__link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @ endif
                    -->
                @else
                    <li class="nav-item dropdown">
                        <a class="nav__link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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
    
<Section>
    <section>
        <article class="chapter">
            <div class="box-1">
                <img class="img-horizontal" src="img\portada-1.jpg" alt="Fondo del logo">
                <span>Monso Cosmético Natural</span>  
            </div>
        </article>
        <article class="chapter">
            <div class="box-2">

                <img src="img\img-2.jpg" alt="Modelo Anne">

                <div class="info-right-2">
                    <span class="title">Piel suave</span>
                    <p class="info">Contamos con variedad de 
                        jabones artesanales para que tu pies esté siempre suave. </p>
                    <Button class="view-catalogue">
                        <span class="Letter-button">Ver Catálogo</span>
                    </Button>
                </div>

            </div>
        </article>
        <article class="chapter">
            <div class="box-3">
                <img src="img\img-3.jpg" alt="Modelo Karol">

                <span class="title">Salud es cuidarse</span>
                <div class="box-p">
                    <p class="info">Cuente con nuestros
                        mejores productos </p>
                </div>
                    
            </div>
        </article>
        <article class="chapter">
            <div class="box-4">

                <div class="info-left">
                    <span class="title">Luzca bien siempre</span>
                    <p class="info">Mira uno de los productos favoritos de nuestros clientes. </p>
                    <Button class="view-product">
                        <span class="Letter-button">Ver producto</span>
                    </Button>
                </div>
                
                <img src="img\img-4.jpg" alt="Modelo Jack">
            </div>

        </article>
        <article class="chapter">
            <div class="box-5">
                <img src="img\img-5.jpg" alt="Resgístrese con nosotros">
                <span class="title">Regístrate para más información acerca 
                    de nosotros</span>
                <Button class="view-register">
                    <span class="Letter-button">Registrarme</span>
                </Button>
            </div>
        </article>
    </section>
</Section>
<footer>
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
</footer>
</body>

</HTML>
