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
	

		<link rel="stylesheet" href="css/estilos/contacto.css">
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


<section class="maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d30606.468250011287!2d-92.571528!3d16.48523!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1595707447087!5m2!1ses!2smx" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact">
                   <h2>Detalles de contacto</h2>
                    <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-facebook" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>Nuestro Facebook</p>
                           <p>EMSAD 295 N.L</p>
                       </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-twitter" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>Nuestro Twitter</p>
                           <p>@Emsad_295</p>
                       </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>Nuestro E-mail</p>
                           <p>Emsad@hotmail.com</p>
                       </div>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="contact_icon">
                       <div class="icon">
                           <i class="fa fa-phone" aria-hidden="true"></i>
                       </div>
                       <div class="c_text">
                           <p>Linea Telefonica</p>
                           <p>992 116 94 05</p>
                       </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="get_in_touch">
                   <h2>¡Contactanos!</h2>
                 	<img src="img/informes.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

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


<!--ESTE ES EL SLIDER JS-->
<script src="js/banner2/jquery.singlePageNav.min.js"></script>
<script src="js/banner2/unslider.min.js"></script>
<script src="js/banner2/templatemo_script.js"></script>


<!--TODA LA ANIMACIÓN DEL INDEX-->
<script src="js/jquery.inview.min.js"></script>
<script src="js/custom.js"></script>


    </body>
</html>
