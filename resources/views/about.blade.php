<!DOCTYPE HTML>
<HTML lang="es">
<head>
	<meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monso</title>

	<!--CSS Styles-->
	<link rel="stylesheet" href="static/css/footer.css">
	<link rel="stylesheet" href="static/css/nav.css">
	<link rel="stylesheet" href="static/css/all.min.css">
    <link rel="stylesheet" href="static/css/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/about.css">

	<!--JS-->
	<script text="text/javaScript" src="JS/index.js"></script>     
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css"></script>
	
	
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

                <li class="nav__item nav__item--login"> <a class="nav__link" href="{{ route('login') }}"> Iniciar Sesión </a> </li>
            </ul>
        </nav>
	</header>
	<!--End Navbars-->
	

	<!--start body-->
	<article class="article-about-us">
		<div class="img-section">
			<img class="img-about" src="static/img/Logo_MONSO.png" alt="Monso Cosméticos Costa Rica">
		</div>
		<h1>Nuestra empresa</h1>

		<p class="paragraph-about">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
		in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, 
		sunt in culpa qui officia deserunt mollit  anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
		in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, 
		sunt in culpa qui officia deserunt mollit  anim id est laborum.
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
		in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, 
		sunt in culpa qui officia deserunt mollit  anim id est laborum.
		</p>
	</article>
	<!--End - body-->
	
	<!--start Footer-->
    <footer class="footer">
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