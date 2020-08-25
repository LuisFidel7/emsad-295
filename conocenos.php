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
		
		<link rel="stylesheet" href="css/estilos/conocenos.css">
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
<!-- start about -->
<section id="about" class="templatemo-section templatemo-top-130">
	<div class="container">
		<div class="row">
			<br><br><br>
			<div class="col-md-6 col-sm-6">			<br>
				<h3 class=" padding-bottom-10 text-center">Bienvenida</h3>
				<p class="text-justify p">Estoy agradecida y orgullosa de asumir la dirección de esta gran institución cuya principal riqueza son sus estudiantes, nuestra razón de ser. Al personal docente y administrativo, que a diario emprende su trabajo de manera responsable, les refrendo mi compromiso para que su labor se realice con mejores herramientas y en condiciones cada vez más óptimas, para lo cual trabajaremos codo a codo, cada uno desde su espacio y conscientes de la importancia que tiene nuestro actuar como servidores públicos. Para mi es una enorme satisfacción formar parte de esta noble institución e integrarme a este equipo de trabajo comprometido con las y los jóvenes chiapanecos.</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<img src="img/dire.png" class="img-responsive img-bordered img-about" alt="about img"><br>
				<p class="">Dra. Deysi Lorena Aguilar<br>
					Directora del EMSAD 295 Nuevo León.</p>
			</div>
		</div>
	</div>
</section>
<!-- end about -->

<img src="img/baner_convocatoria.png" class="po" alt="">

<section class="templatemo-container light-gray-bg section-shadow-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 text-center tm-about-container-2">
				<img src="img/mision.png" alt="Image"><br><br><br>
				<p class="about-description">"Formar jóvenes en el nivel medio superior, con una educación integral, para contribuir en su proyecto de vida.</p>
			</div>
		   <div class="col-lg-4 col-md-4 col-sm-4 text-center tm-about-container-2">
				<img src="img/vision.png" alt="Image"><br><br><br>
				<p class="about-description">"Ser una institución que atienda la demanda educativa con calidad y nos identifique como la mejor opción en el nivel medio superior."</p>
		   </div>
		   <div class="col-lg-4 col-md-4 col-sm-4 text-center tm-about-container-2">
				<img src="img/lealtad.png" alt="Image"><br><br><br>
				<p class="about-description">"Vivir con dignidad; es asumir su naturaleza humana en términos de seres libres con respuestas razonadas, pertinentes, justas y precisas, convencidos de lo que hacemos."</p>
			</div>
		</div>
	</div>
</section>

<div class="valoresUS animated-row">
	<div class="animate" data-animate="fadeInUp">
	<h2 class="text-center negras">Valores US</h2>
	<img src="img/valores/IMG-58.svg" width="75" alt="">
	<img src="img/valores/IMG-59.svg" width="75" alt="">
	<img src="img/valores/IMG-60.svg" width="75" alt="">
	<img src="img/valores/IMG-61.svg" width="75" alt="">
	<img src="img/valores/IMG-62.svg" width="75" alt="">
	<img src="img/valores/IMG-63.svg" width="75" alt="">
	<img src="img/valores/IMG-64.svg" width="75" alt="">
	<img src="img/valores/IMG-65.svg" width="75" alt=""><br>
	<img src="img/valores/IMG-66.svg" width="75" alt="">
	<img src="img/valores/IMG-67.svg" width="75" alt="">
	<img src="img/valores/IMG-68.svg" width="75" alt="">
	<img src="img/valores/IMG-69.svg" width="75" alt="">
	<img src="img/valores/IMG-70.svg" width="75" alt="">
	<img src="img/valores/IMG-71.svg" width="75" alt="">
	<img src="img/valores/IMG-72.svg" width="75" alt="">
</div>
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