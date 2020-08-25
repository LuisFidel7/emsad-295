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
		
		<link rel="stylesheet" href="css/estilos/docentes.css">
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
<br><br><br><br><br><br>

<section class="section-title" id="testimonials">
	<div class="container">
		<h2 class="text-uppercase text-center">Equipo de docentes</h2>
		<div class="text-center margin-top-50 tm-testimonial-images-container">
			<div class="img-container">				
				<div class="tm-img-circle-border absolute-center" data-comment="Sed velit elit, ornare cursus ex ac, tempor viverra mi. Vestibulum tincidunt egestas tellus, vel pharetra ante tincidunt sit amet. Vestibulum vitae velit eget metus interdum interdum." data-author="Jennifer Ves Tin" id="author1">
					<img src="img/profe3.jpg" alt="Testimonial 1" class="img-circle tm-img-testimonial">
				</div>	
			</div>			
			<div class="img-container">
				<div class="tm-img-circle-border absolute-center" data-comment="Morbi posuere metus quam, vitae tempus nulla vehicula eu. Etiam vitae nunc faucibus, iaculis tellus eu, molestie turpis. Nam quis consequat leo. Nulla ac erat in libero porta commodo. Phasellus fringilla pharetra ullamcorper." data-author="Alicia Nulla Act" id="author2">
					<img src="img/profe2.jpg" alt="Testimonial 2" class="img-circle tm-img-testimonial">	
				</div>					
			</div>
			<div class="img-container">
				<div class="tm-img-circle-border absolute-center active" data-comment="Suspendisse a maximus sem. Pellentesque consequat finibus metus a varius. Morbi placerat suscipit mi, in tincidunt ligula lobortis porttitor. Mauris mollis, ex sit amet sagittis elementum, tellus quam vestibulum ex, vitae cursus massa tortor et tortor." data-author="Dacilisis Luctus" id="author3">
					<img src="img/profe6.jpg" alt="Testimonial 3" class="img-circle tm-img-testimonial">
				</div>
				
			</div>
			<div class="img-container">
				<div class="tm-img-circle-border absolute-center" data-comment="Donec laoreet nisl vel nisi posuere tempus quis at tortor. Curabitur egestas elementum est sit amet gravida. Quisque maximus diam eu turpis malesuada, in interdum massa efficitur. Vestibulum blandit pellentesque ipsum a fermentum. Duis id rutrum leo." data-author="Jessica Nisi Vel" id="author4">
					<img src="img/profe4.jpg" alt="Testimonial 4" class="img-circle tm-img-testimonial">
				</div>					
			</div>
			<div class="img-container">
				<div class="tm-img-circle-border absolute-center" data-comment="Integer aliquam nibh nulla, id elementum purus tempus quis. Etiam eu massa condimentum, consectetur turpis et, semper diam. Vivamus mauris ipsum, bibendum non tempor nec, ultricies a leo. Fusce eu efficitur diam. Praesent vel mi viverra leo finibus maximus sed in ipsum." data-author="Malicia Viva Fusce" id="author5">
					<img src="img/profe5.jpg" alt="Testimonial 5" class="img-circle tm-img-testimonial">
				</div>					
			</div>
		</div>
		<p class="text-uppercase text-center tm-author tm-orange-text">Profesores</p>
	</div>
</section> <!-- testimonials -->


<section id="content">
	<div class="container">
	 
	  <!-- divider -->
	  <div class="row">
		<div class="span12">
		  <div class="solidline"></div>
		</div>
	  </div>
	  <!-- end divider -->
  <!--
	  <div class="row team">
		<div class="span12">
		  <h4>Equipo de Docentes del Plantes 295 N.L</h4>
		</div>
		<div class="span3">
		  <div class="team-box">
			<a href="img/team1.jpg" class="thumbnail"><img src="img/team1.jpg" alt="" /></a>
			<div class="roles aligncenter">
			  <p class="lead"><strong>Deysi Lorena Aguilar</strong></p>
			  <p>
				Cargo - Directora
			  </p>
			  <p>
				<a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
			  </p>

			</div>
		  </div>
		</div>
		<div class="span3">
		  <div class="team-box">
			<a href="img/team2.jpg" class="thumbnail"><img src="img/team2.jpg" alt="" /></a>
			<div class="roles aligncenter">
			  <p class="lead"><strong>Iram Jauregui Padilla</strong></p>
			  <p>
				Sub Director 
			  </p>
			  <p>
				<a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
			  </p>
			</div>
		  </div>
		</div>
		<div class="span3">
		  <div class="team-box">
			<a href="img/team3.jpg" class="thumbnail"><img src="img/team3.jpg" alt="" /></a>
			<div class="roles aligncenter">
			  <p class="lead"><strong>Roman Pérez</strong></p>
			  <p>
				Profesor
			  </p>
			  <p>
				<a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
			  </p>
			</div>
		  </div>
		</div>
		<div class="span3">
		  <div class="team-box">
			<a href="img/team4.jpg" class="thumbnail"><img src="img/team4.jpg" alt="" /></a>
			<div class="roles aligncenter">
			  <p class="lead"><strong>Carlos Ruiz</strong></p>
			  <p>
				Maestro Informatico
			  </p>
			  <p>
				<a href="#"><i class="icon-facebook icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-twitter icon-circled icon-bglight active"></i></a>
				<a href="#"><i class="icon-linkedin icon-circled icon-bglight active"></i></a>
			  </p>
			</div>
		  </div>
		</div>
	  </div>
-->
	</div>
  </section>


  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
	<div class="container">

	  <div class="section-title" data-aos="fade-in" data-aos-delay="100">
		<h2>Docentes</h2>
		<p>Este es el equipo de docentes que laboran en el EMSAD 295 NUEVO LEON, Encargados de dar una buena educación cumpliendo con los criterios de educación.</p>
	  </div>
	  <div class="row">
		<div class="col-lg-4 col-md-6">
		  <div class="member" data-aos="fade-up">
			<div class="pic"><img src="img/profe6.jpg" class="img-fluid" width="350" alt=""></div>
			<div class="member-info">
			  <h4>Deysi</h4>
			  <span>Lorena Aguilar</span>
			  <div class="social">
				<p>Directora</p>
			  </div>
			</div>
		  </div>
		</div>

		<div class="col-lg-4 col-md-6">
		  <div class="member" data-aos="fade-up" data-aos-delay="150">
			<div class="pic"><img src="img/profe3.jpg" class="img-fluid" width="350" alt=""></div>
			<div class="member-info">
			  <h4>Irám</h4>
			  <span>Jauregui Lopez</span>
			  <div class="social">
				<p>Sub Director</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 col-md-6">
		  <div class="member" data-aos="fade-up" data-aos-delay="300">
			<div class="pic"><img src="img/profe5.jpg" class="img-fluid" width="350" alt=""></div>
			<div class="member-info">
			  <h4>Nallely</h4>
			  <span>Roblero Ruiz</span>
			  <div class="social">
				<p>Secretaria Academica</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-lg-4 col-md-6">
			<div class="member" data-aos="fade-up" data-aos-delay="300">
			  <div class="pic"><img src="img/profe1.jpg" class="img-fluid" width="350" alt=""></div>
			  <div class="member-info">
				<h4>Román</h4>
				<span>Pérez Moreno</span>
				<div class="social">
				<p>Profesor</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-md-6">
			<div class="member" data-aos="fade-up" data-aos-delay="300">
			  <div class="pic"><img src="img/profe4.jpg" class="img-fluid" width="350" alt=""></div>
			  <div class="member-info">
				<h4>Gabriela</h4>
				<span>Carpio</span>
				<div class="social">
				  <p>Profesora</p>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-lg-4 col-md-6">
			<div class="member" data-aos="fade-up" data-aos-delay="300">
			  <div class="pic"><img src="img/profe2.jpg" class="img-fluid" width="350" alt=""></div>
			  <div class="member-info">
				<h4>Gonzálo</h4>
				<span>Molina</span>
				<div class="social">
				  <p>Profesor</p>
				</div>
			  </div>
			</div>
		  </div>

	  </div>

	</div>
  </section><!-- End Team Section -->

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




    </body>
</html>