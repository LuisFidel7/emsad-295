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
		<link rel="stylesheet" href="css/INDEX.css">

		<link rel="stylesheet" href="css/INDEXANI.CSS">
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

<div class="banner" id="templatemo_banner_slide">
    <ul>
        <li class="templatemo_banner_slide_01">
            <div class="slide_caption">
               <!-- <h1>Responsive Layout</h1>
                <p>Aenean diam libero, venenatis eu risus eu, tincidunt porttitor orci. 
					Praesent sit amet auctor erat, vitae auctor dolor. Sed viverra nunc magna, 
					quis placerat augue pellentesque quis. Sed nec pellentesque dolor.</p>-->
            </div>
        </li>
        <li class="templatemo_banner_slide_02">
            <div class="slide_caption">
               <!-- <h1>HTML5 Web Template</h1>
                <p>Dragonfruit is another responsive template from templatemo. Nulla consequat mi
					 et lectus vehicula condimentum. Nulla ullamcorper dolor vehicula dolor interdum,
					  eget fermentum ligula bibendum.</p>-->
            </div>
        </li>
        <li class="templatemo_banner_slide_03">
            <div class="slide_caption">
             <!--   <h1>Mobile Friendly</h1>
                <p>Pellentesque luctus ac nunc et hendrerit. Aliquam eu scelerisque eros. 
					Vestibulum scelerisque mi nec augue condimentum rhoncus. Cras fermentum convallis elementum.</p>-->
            </div>
        </li>
    </ul>
</div>


<!-- ======= animacion de iconos 2da parte ======= -->
<br><br>
<div class="sss animated-row">
	<div id="templatemo_about" class="container_wapper">
		<div class="container-fluid">
			<div class="section-title" data-aos="fade-inup"  data-aos-delay="100">
				<h2 class="animate" data-animate="fadeInUp">Emsad 295 Nuevo León</h2>		
			</div>
			<div class="col-sm-6 col-md-3 about_icon">
				<div class="imgwap mission"><i class="fa fa-rocket"></i></div>
				<div class="animate" data-animate="fadeInUp">
					<h2>Municipio</h2>
					<p>Teopisca chiapas.</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 about_icon">
				<div class="imgwap product"><i class="fa fa-cubes"></i></div>
				<div class="animate" data-animate="fadeInUp">
					<h2>Instalaciones</h2>
					<p>12 aulas ubicadas a 3km.</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 about_icon">
				<div class="imgwap testimonial"><i class="fa fa-bar-chart-o"></i></div>
				<div class="animate" data-animate="fadeInUp">
					<h2>Contacto</h2>
					<p>Tel.992 116 94 05.</p>
				</div>
			</div>
			<div class="col-sm-6 col-md-3 about_icon">
				<div class="imgwap statistic"><i class="fa fa-comments"></i></div>
				<div class="animate" data-animate="fadeInUp">
					<h2>Nombre</h2>
					<p>Emsad 295 NL.</p>
				</div>
			</div>
    	<div class="clearfix testimonial_top_bottom_spacer"></div>
		</div>
	</div>
</div>
<!-- ======= FIN animacion de iconos 2da parte ======= -->

<div id="aviso_off" style="display:block;" class="animated-row">
	<div class="nuevo animate" data-animate="fadeInDown">
		<a href="javascript:void(0);" class="estilo" onclick="document.getElementById('aviso_off').style.display='none';"><b>X</b></a><a href="registro.php"><img src="img/letrero.png" class="centrar" width="700"></a><br><p class="centrar2">20 de agosto Inicio de Clases</p>
	</div>
</div>

<div class="morado">
	<div class="imagensitas animated-row">
		<img class="animate" data-animate="swing" src="img/banda/inscribete.png" width="100" alt="" HSPACE="100" >
		<img class="animate" data-animate="swing" src="img/banda/letra.png" width="100" alt="" HSPACE="100">
		<img class="animate" data-animate="swing" src="img/banda/nosotros.png" width="100" alt="" HSPACE="100">
		<img class="animate" data-animate="swing" src="img/banda/EMSAD.png" width="100" alt="" HSPACE="100">
	</div>
</div>


<div class="best-features animated-row">
	<div class="container animate" data-animate="fadeInUp">
	  <div class="row">
		<div class="col-md-12">
		  <div class="section-heading">
			<h2>Quieres seguir estudiando la preparatoria?</h2>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="left-content">
			<h4>Forma parte del Emsad 295 Nuevo Leon.</h4>
			<p>Visitanos en nuestras instalaciones para mas información detallada. LLeva contigo estos papeles para avanzar con el tramite de tu inscripción.</p>
			<ul class="featured-list">
			  <li>Acta de nacimiento</li>
			  <li>Curp</li>
			  <li>Comprobante de domicilio</li>
			  <li>Certificado de secundaria</li>
			  <li>Certificado médico</li>
			</ul>
			<a href="registro.php" class="filled-button animate" data-animate="fadeInUp">MAS INFO</a>
		  </div>
		</div>
		<div class="col-md-6">
		  <div class="right-image animate" data-animate="fadeInUp">
			<img src="img/alumnado.jpg" class="rounded" alt="">
		  </div>
		</div>
	  </div>
	</div>
</div>
	

  <!-- "Latest News" -->
  <div class="container animated-row">
	<div class="row">
		<!-- Main content -->
	  <section class="col-lg-8 col-md-8">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="text-uppercase">Inscribete</h2>
				<hr class="templatemo-section-header-hr">
				<p class="text-uppercase templatemo-section-subheader margin-bottom-0">Unéte a Nosotros.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<article class="templatemo-blog-post">
					<div class="post-img-container">
						<img src="img/alumnado2.jpg" alt="Post 1" class="post-img img-responsive">
						<div class="templatemo-post-social">
							<div class="flex-center margin-top-10">
								<i class="fa fa-heart fa-2x red-bg"></i>
							</div>
							<div class="flex-center margin-top-10">
								<i class="fa fa-comments-o fa-2x gold-bg"></i>
							</div>
						</div>
						<div class="templatemo-post-date gold-text">
							<div>
								<div class="text-center date">20</div>
								<div class="text-center">Agosto</div>
								<div class="text-center">Inicio</div>
							</div>
						</div>
					</div>
					<div class="post-title">
						<h3 class="text-uppercase">Inscripciones Abiertas.</h3>
					</div>
					<div class="post-excerpt gray-text">
						<p>Realiza tu inscripción en las instalaciones o bien en linea.</p>
					</div>
					<a href="registro.php" class="gray-text margin-top-10 post-read-more animate" data-animate="fadeInUp">
						<i class="fa fa-arrow-circle-o-right fa-2x v-align-middle"></i> Inscripciones
					</a>
					<hr>
				</article>
			</div>
		</div>
	</div>
</div>
	


<div id="templatemo_events" class="container_wapper">
    <div class="container-fluid">
		<div class="section-title" data-aos="fade-in" data-aos-delay="100">
			<h2>Bienvenida</h2>		
		  </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="img/bienvenido.png" class="img-responsive" alt="Web Design Trends" />
                </div>
               
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="img/aulas.png" class="img-responsive" alt="Free Bootstrap Seminar" />
                </div>    
            </div>
		</div>
		
    </div>
</div>


<!-- ======= Services Section ======= -->
<section id="services" class="services animated-row">
	<div class="container animate" data-animate="fadeInUp">
	  <div class="section-title" data-aos="fade-in" data-aos-delay="100">
		<img src="img/under.png" class="img-responsive" alt="">
		<h2>Te Preparamos para el futuro.</h2>		
	  </div>
	  <div class="row">
		<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		  <div class="icon-box animate" data-animate="fadeInUp" data-aos="fade-up">
			<div class="icon"><i class="bx bxl-dribbble"></i></div>
			<img class="imgchica" width="250" src="img/estudent.png" alt="">
		  </div>
		</div>
		<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		  <div class="icon-box animate" data-animate="fadeInUp" data-aos="fade-up" data-aos-delay="100">
			<div class="icon"><i class="bx bx-file"></i></div>
			<img class="imgchica" width="250" src="img/estudent1.png" alt="">
		  </div>
		</div>

		<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		  <div class="icon-box"  data-aos="fade-up" data-aos-delay="200">
			<div class="icon"><i class="bx bx-tachometer"></i></div>
			<img class="imgchica" width="250" src="img/estudent2.png" alt="">
		  </div>
		</div>

		<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
		  <div class="icon-box animate" data-animate="fadeInUp" data-aos="fade-up" data-aos-delay="300">
			<div class="icon"><i class="bx bx-world"></i></div>
			<img class="imgchica" width="250" src="img/student3.png" alt="">
		  </div>
		</div>

	  </div>
	</div>
  </section><!-- End Services Section -->

<hr>
	<div class="centrar">
	<img  width="250" src="img/informes.png" alt="">
	</div><br><br><br><br>
<!-- ***** Testimonials Starts ***** -->
				<div class="section-title" data-aos="fade-in" data-aos-delay="100">
					<h2>Ideales Institucionales</h2>		
				  </div>
			
					<div id="sss" class="animated-row">
						<div class="row">
							<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
								<div class="feature-inner">
									<div class="icon-wrapper">
										<i class="fa fa-2x fa-envelope-o"></i>
									</div>
									<div class="animate" data-animate="fadeInUp">
										<h2>Responsabilidad</h2>
										<p>Hacer crecer tu futuro es nuestra responsablidad.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="600ms">
								<div class="feature-inner">
									<div class="icon-wrapper">
										<i class="fa fa-2x fa-heart-o"></i>
									</div>
									<div class="animate" data-animate="fadeInUp">
										<h2>Trabajo</h2>
										<p>Gran trabajo en todas las areas, excelente ambiente estudiantil.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="900ms">
								<div class="feature-inner">
									<div class="icon-wrapper">
										<i class="fa fa-2x fa-star-o"></i>
									</div>
									<div class="animate" data-animate="fadeInUp">
										<h2>Entrega</h2>
										<p>La pasion y entrega nos caracteriza.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-3 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="1200ms">
								<div class="feature-inner">
									<div class="icon-wrapper">
										<i class="fa fa-2x fa-comments-o"></i>
									</div>
									<div class="animate" data-animate="fadeInUp">
										<h2>Exito</h2>
										<p>Juntos la oportunidad de crecimiento y hacer grandes cosas esta a nuestro alcanze.</p>
									</div>
								</div>
							</div>                        
						</div>
					</div><!--/#feature-container-->
					


					<div id="social-icons">
						<div class="text-right">
							<ul class="social-icons">
								<li><a href="https://Facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://Twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://Instagram.com" title="Instagram"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://google.com" title="Google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
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


<!--ESTE ES EL SLIDER JS-->
<script src="js/banner2/jquery.singlePageNav.min.js"></script>
<script src="js/banner2/unslider.min.js"></script>
<script src="js/banner2/templatemo_script.js"></script>


<!--TODA LA ANIMACIÓN DEL INDEX-->
<script src="js/jquery.inview.min.js"></script>
<script src="js/custom.js"></script>


    </body>
</html>
