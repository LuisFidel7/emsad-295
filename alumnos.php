<!doctype html>
<html class="no-js" lang="">
    <head>
	<?php session_start(); ?>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Emsad 295 Nuevo Leon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
		<link rel="shortcut icon" href="img/logo.png" width="80" height="80">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/styleNav.css">

		<link rel="stylesheet" href="css/estilos/alumnos.css">
		<link rel="stylesheet" href="css/animate.css">

		<!--estilos del SLIDER-->
		<link rel="stylesheet" href="css/slider/slider.css">
		<link rel="stylesheet" href="css/slider/normalize.css">
        <link rel="stylesheet" href="css/slider/font-awesome.css">
        <link rel="stylesheet" href="css/slider/bootstrap.min.css">
        <script src="js/slider/vendor/modernizr-2.6.2.min.js"></script>

    </head>
<body >
	
	
<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="lft_hd">
					<a href="index.html"><img src="img/logo2.png" alt="" width="110"/></a>
				</div>
			</div>			
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="rgt_hd">					
					<div class="main_menu">
						<nav id="nav_menu">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>	
						<div id="navbar">
							<ul>
							<li><a class="page-scroll" href="index.php">Emsad 295</a></li> 
							<li><a href="#">Servicios<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a class="page-scroll" href="biblioteca.php"><img src="img/mayorque.png" alt="" width="15"/>Biblioteca</a></li>
								<li><a class="page-scroll" href="laboratorio.php"><img src="img/mayorque.png" alt="" width="15"/>Laboratorio</a></li>
								<li><a class="page-scroll" href="canchas.php"><img src="img/mayorque.png" alt="" width="15"/>Entretenimiento</a></li>
							</ul>
							</li> 						

							<li><a href="#">Instalaciones<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a class="page-scroll" href="aulas.php"><img src="img/mayorque.png" alt="" width="15"/>Aulas</a></li>
								<li><a class="page-scroll" href="canchas.php"><img src="img/mayorque.png" alt="" width="15"/>Canchas</a></li>
							</ul>
							</li> 
							
								<li><a class="page-scroll" href="docentes.php">Docentes</a></li>
								<li><a class="page-scroll" href="alumnos.php">Alumnos</a></li>
								<li><a class="page-scroll" href="conocenos.php">Conocenos</a></li>
								<li><a class="page-scroll" href="contacto.php">Contactanos</a></li>
						
								
								<?php if( isset($_SESSION ["usuario"]) ) {  ?>
									<li><a class="page-scroll" href="tabla_inscritos.php">Pre-inscritos</a></li>
								  
								<li  id="link-sesion">
								  <a class="page-scroll" href="logout.php">Cerrar sesi&oacute;n</a>
								</li>
						  
								<?php } else { ?>

									<li><a href="login.php"><img src="img/usuario.png" width="40" class="imgusuario" alt=""></a>
										
						  
								<?php } ?>
							
							</ul>
						
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
		</div>	
</header>
<!-- End Header Section -->

<div id="about" class="section lb">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="message-box">                        
					<h2>Alumnado del Plantel.</h2>
					<p>Todo el alumnado de nuestra institución cuenta con valores del plantel,. </p>
					<p>Normas para el alumnado.</p>
					<ul>
						<li>Vestir correctamente el uniforme escolar.</li>
						<li>Asistir a clases en su debido horario.</li>
						<li>Respetar a su docentes. </li>
						<li>Entregar trabajos para calificación.</li>
						<li>Ser responsable.</li><br><br>
						<a href="reglamento_de_alumnos.pdf"><li>Ver Reglamento de Cobach</li></a>
					</ul>
					
				</div><!-- end messagebox -->
			</div><!-- end col -->

			<div class="col-md-6 animated-row">
				<div class="right-box-pro wow fadeIn"  >
					<img src="img/student2.png" alt="" width="400" class="img-fluid img-rounded animate" data-animate="fadeInRight">
				</div><!-- end media -->
			</div><!-- end col -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<div class="centrar">
<img src="img/school.png" width="700" alt="">
</div>

<!-- footer -->
<footer>
<div class="container-fluid">
    <div class="row footer-top">
        <div class="col-sm-4 text-center">
            <p class="ft-text-title">Contacto:</p:><br>
                <a class="contact" href="tel:+9921169405">
                    <i class="fa fa-phone" aria-hidden="true"></i> 992 116 94 05</a>           
            </div>
            <div class="col-sm-4 text-center border-left">
                <div class="address-member">
                    <p class="member">
                        <p>Ubicación del Plantel<br>Avenida central, Frente al domo municipal, Nuevo Leòn Teopisca chis</p>  
                    </p>
               </div>
           </div>
           <div class="col-sm-4 col-xs-12 text-center border-left">
            <div class="pspt-dtls">
				<p class="member"><b>Redes Sociales:</b></p>
				<a href="https://facebook.com" class="about"><img src="img/redes/IMG-SOCIAL-38.png" width="30"  HSPACE="5" alt=""></a>
				<a href="https://twitter.com" class="about"><img src="img/redes/IMG-SOCIAL-39.png" width="30" HSPACE="5" alt=""></a>
				<a href="https://instagram.com" class="about"><img src="img/redes/IMG-SOCIAL-40.png" width="30" HSPACE="5" alt=""></a>
				<a href="https://youtube.com" class="about"><img src="img/redes/IMG-SOCIAL-42.png" width="37" HSPACE="5" alt=""></a>
				<a href="https://linkedin.com" class="about"><img src="img/redes/IMG-SOCIAL-43.png" width="30" HSPACE="5" alt=""></a>
				<a href="https://tiktok.com" class="about"><img src="img/redes/IMG-SOCIAL-41.png" width="30" HSPACE="5" alt=""></a><br>
                <p >Aviso de Privacidad | © 2020 Emsad 295</p>           
            </div>
        </div>
    </div>
</div>
</footer>

<!--ESTE ES EL NAV-->
        <script src="js/vendor/jquery-1.11.2.min.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/appear.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/showHide.js"></script>
		<script src="js/jquery.nicescroll.min.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script src="js/plugins.js"></script>


<!--TODA LA ANIMACIÓN-->
<script src="js/jquery.inview.min.js"></script>
<script src="js/custom.js"></script>

    </body>
</html>