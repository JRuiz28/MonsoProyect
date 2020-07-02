<!DOCTYPE HTML>
<HTML lang="es">
<head>
	<meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monso</title>

	<!--CSS Styles-->
	<link rel="stylesheet" href="static/css/registered.css">
	<link rel="stylesheet" href="static/css/index.css">
	<link rel="stylesheet" href="static/css/footer.css">
    <link rel="stylesheet" href="static/css/nav.css">
	<link rel="stylesheet" href="static/css/all.min.css">
    <link rel="stylesheet" href="static/css/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/about.css">';

	<!--JS-->
	<script text="text/javaScript" src="JS/index.js"></script>     
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css"
	></script>
	
	
	<!--Others-->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<!--Start Navbars-->
    @section('header')
    <div class="header">
		<div class="box-background-nav">
            <section class="container-nav">

                <article class="item-logo">
					<a href="index.php">
						<img src="static/img/Logo_MONSO.png" alt="Monso Cosméticos Costa Rica" />
					</a>
                </article>

                <article class="item-link">
                    <a href="index.php" class="link-home"> <span>Inicio</span> </a>
                    <a href="catalogue.php" class="link-list"> <span>Catálogo</span> </a>
                    <a href="about.php" class="link-about-us"> <span>Acerca de</span> </a>
                </article>

                <article class="item-login">
                    <a href="registerProduct.php" class="link-registration-module"> <span>Módulo de registro</span> </a>
                    
                    <a href="login.php" class="link-login"> 
					   <span>Iniciar sesión</span>
					   <i class="fas fa-user"></i>
                    </a>
                </article>
            </section>
        </div>
    </div>
    @show
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
        @show
        </div>
</body>

</HTML>
