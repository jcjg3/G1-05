<!DOCTYPE HTML>
<html>
	<head>
		<title>Adacea</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Bienvenidos<br/></h1>
						<p>Este proyecto esta realizado para la ONG ADACEA</p>
						<ul class="actions">
							<li><a href="{{route('informacion')}}" class="button icon solo fa-arrow-down scrolly">Mas información</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="inicio" class="logo">Proyecto Adacea</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li class="active"><a href="{{url('/')}}">Incio</a></li>
                            <li><a href="{{route('informacion')}}">Informacion del Proyecto</a></li>
                            <li><a href="{{route('contacto')}}">Contacto</a></li>
							<li><a href="{{ route('login') }}">Iniciar sesión</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
                    </nav>
            </div>
                   


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>