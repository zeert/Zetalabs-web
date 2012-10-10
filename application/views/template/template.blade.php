<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="not-ie" lang="es"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<title>@yield('titulo')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Somos expertos en soluciones tecnologicas para pequeñas y medianas empresas. Especialistas en desarrollo de aplicaciones web, sitios e implementacion de servidores">
    <meta name="keywords" content="desarrollo, tecnologia, web, sistemas, servidores, firewall, linux, mac, apple, clientes, servicios, asesorias" />
	<meta name="author" content="Zetalabs Chile">

	<!-- Custom css -->
	<?php echo HTML::style('css/style.min.css'); ?>
	<?php echo HTML::style('css/font-awesome/font-awesome.css'); ?>
	<!--[if IE 7]>
		<?php echo HTML::style('css/font-awesome/font-awesome-ie7.css'); ?>
	<![endif]-->

	<!-- Carga Open Sans desde Google Font -->
	<?php echo HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'); ?>


	<!-- HTML5 shim,  soporte html5  en IE6-8 -->
	<!--[if lt IE 9]>
		<?php echo HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js'); ?>
	<![endif]-->

	<?php echo HTML::script('http://code.jquery.com/jquery-latest.js'); ?>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
	<style type="text/css">

		#map {
    height: 200px; }

	</style>
</head>



<header id="header">

		<!-- Navigation
		================================================== -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index-2.html">
						<b>Your</b>Site
					</a>
@section('navegacion')

					<div class="nav-collapse fr">
						<ul class="nav">
							<li class="active"><?php echo HTML::link('home', 'Home'); ?></li>
							<li><a href="work.html">Servicios</a></li>
							<li><a href="about.html">Clientes</a></li>
							<li><a href="plans.html">Proyectos</a></li>
							<li><a href="faq.html">Preguntas</a></li>
							<li><a href="contact.html">Contacto</a></li>
							<li><button class="btn btn-primary">Clientes</button></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!-- end .container -->
			</div><!-- end .navbar-inner -->
		</div><!-- end .navbar -->

@yield_section
	

@yield('contenido')



	<footer class="row">
		<div class="container">
			<div class="row">
				<div class="span2">
					<h3>Quick links</h3>
					<ul>
						<li class="active"><a href="index.html">Home</a></li>
							<li><a href="work.html">Servicios</a></li>
							<li><a href="about.html">Clientes</a></li>
					</ul>
				</div>
				<div class="span2">
					<br /><br />
					<ul>
						<li><a href="plans.html">Proyectos</a></li>
						<li><a href="faq.html">Preguntas</a></li>
						<li><a href="contact.html">Contacto</a></li>
					</ul>
				</div>
				<div class="span4 social-networks">
					<h3>Mantengamos el contacto</h3>
					<p>Siguenos de la forma que quieras</p>
					<a href="#" title="Siguenos en Facebook" class="icon-facebook"></a>
					<a href="#" title="Siguenos en Twitter" class="icon-twitter"></a>
					<a href="#" title="Siguenos en Google Plus" class="icon-google-plus"></a>
					<a href="#" title="Siguenos en Google Plus" class="icon-github"></a>
					<a href="#" title="Siguenos en Google Plus" class="icon-pinterest"></a>
				</div>
				<div class="span4">
					<h3>Newsletter</h3>
					<p>Subscribe to our monthly newsletter and be the first to know about our news and special deals!</p>
					<form>
						<input type="text" placeholder="Enter your E-mail" />
						<input type="submit" class="btn" value="Ok" />
					</form>
				</div>
			</div> <!-- /row -->		
		</div> <!-- /container -->

	<div id="footer-extra">
		<div class="container">
			<div class="row">
				<div class="span4">
					&copy; 2012 ZetaLabs.cl
				</div>
				<div class="span4">
					<i class="icon-phone"></i> &nbsp; 
					00123 320 000 123 456
				</div>
				<div class="span4">
					<i class="icon-envelope"></i> &nbsp; 
					<?php echo HTML::mailto('hola@zetalabs.cl', 'contactanos'); ?>
				</div>
			</div> <!-- end .row -->		
		</div> <!-- end .container -->		
	</div>


	</footer>




	<?php echo HTML::script('js/bootstrap.min.js'); ?>
	<?php echo HTML::script('js/jquery.isotope.min.js'); ?>
	<?php echo HTML::script('js/jquery.touchSwipe.js'); ?>
	<?php echo HTML::script('js/functions.min.js'); ?>

	</body>
</html>