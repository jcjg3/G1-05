<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Información del proyecto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>
  
  <body id="is-loading">
  		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="{{url('/')}}" class="logo">Proyecto Adacea </a>
					</header>

				<!-- Nav -->
					<nav id="nav">
					<ul class="links">
							<li ><a href="{{url('/')}}">Incio</a></li>
              <li class="active"><a href="{{route('informacion')}}">Informacion del Proyecto</a></li>
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

    <!-- Services -->
    <section class="bg-light" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Objetivos</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-book fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Gestión de datos</h4>
            <p class="text-muted">Facilita el trabajo que realiza el empleado</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-play-circle-o fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Grabar sesiónes</h4>
            <p class="text-muted">Consultan las grabaciones para poder mejorar los servicios que ofrecen al paciente</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Control de citas</h4>
            <p class="text-muted">Evitamos que se solapen citas de diferentes pacientess</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 style= "color:white" class="section-heading text-uppercase">Tenemos como fin que un futuro la aplicación pueda ser utilizada por la ONG</h2>
            <h3 class="section-subheading text-muted">Para que el trabajo que realizan sea más cómodo y fácil</h3>
          </div>
        </div>
        <div class="row">
      
       </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Nuestro Equipo</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" src="images/team/t1.jpg" alt="">
                  <h4>Juan Beteta</h4>
                  <p class="text-muted">Lead Marketer</p>
                  <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#">
                        <i class="fa fa-facebook"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
          <div class="col-sm-3">
              <div class="team-member">
                <img class="mx-auto rounded-circle" src="images/team/t2.jpg" alt="">
                <h4>Jose C. Jurado</h4>
                <p class="text-muted">Lead Marketer</p>
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="images/team/t3.jpg" alt="">
              <h4>Raúl Pera</h4>
              <p class="text-muted">Lead Marketer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="images/team/t1.jpg" alt="">
              <h4>Ruth Encina</h4>
              <p class="text-muted">Lead Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
            <span class="copyright">Copyright &copy; Proyecto Adacea</span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
