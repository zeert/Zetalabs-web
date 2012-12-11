@layout('template/template')

@section('titulo')
Zetalabs :: Expertos en Tecnologia
@endsection



{{--  Menu de navegacion principal --}}

@section('menu')
<div class="navbar navbar-fixed-top" id="primary-navigation">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
					<span class="icon-bar"></span> 
				</a>
				<a href="#home" class="brand scroll-page"><img src="img/logo1.png" alt="Zetalabs :: Expertos en Desarrollo Tecnologico"></a>
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
						<li class="active"><?php echo HTML::link('#home', 'HOME', array('class' => 'scroll-page')); ?></li>
						<li><?php echo HTML::link('#nosotros', 'NOSOTROS', array('class' => 'scroll-page')); ?></li>
						<li><?php echo HTML::link('#clientes', 'CLIENTES', array('class' => 'scroll-page')); ?></li>
						<li><?php echo HTML::link('#servicios', 'SERVICIOS', array('class' => 'scroll-page')); ?></li>
						<li><?php echo HTML::link('#portafolio', 'PORTAFOLIO', array('class' => 'scroll-page')); ?></li>
						<li><?php echo HTML::link('#contacto', 'CONTACTO', array('class' => 'scroll-page')); ?></li>
					</ul>
				</div>
				<!-- /.nav-collapse --> 
			</div>
			<!-- /.container --> 
		</div>
		<!-- /.navbar-inner --> 
	</div>
	<!-- /.navbar --> 
@endsection

{{--  Menu de navegacion principal --}}


{{--  Carrusel de Imagenes del Home --}}

@section('carrusel')
<section id="home" class="project-carousel">
		<div class="container">
			<div class="row">
				<div class="span12" style="padding-top:20px;">
					<div id="featured-project-carousel" class="carousel slide">
						<div class="carousel-inner">
							<div class="item active">
								<h2>Multi Dispositivo</h2>
								<img src="img/slide1.png" alt=""> 
							</div>
							<!-- /.item -->
							<div class="item">
								<h2>Desarrollo HTML5</h2>
								<img src="img/slide2.png" alt="">
							</div>
							<!-- /.item -->
							<div class="item">
								<h2>Soporte CSS3</h2>
								<img src="img/slide3.jpg" alt="">
							</div>
							<!-- /.item -->
							<!--<div class="item">
								<div class="row">
									<div class="span1">&nbsp;</div>
									<div class="span5"> 
										<img src="img/browsers-support.jpg" alt="">
									</div>
									<div class="span5">
										<h2>Browser Support</h2>
										<p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
										<p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
										<a href="#" class="btn btn-primary">Learn more...</a> </div>
									<div class="span1">&nbsp;</div>
								</div>-->
								<!-- /.item --> 
							</div>
						</div>
						<a class="left carousel-control" href="#featured-project-carousel" data-slide="prev">&lsaquo;</a> 
						<a class="right carousel-control" href="#featured-project-carousel" data-slide="next">&rsaquo;</a> </div>
				</div>
			</div>
		</div>
	</section>

@endsection

{{--  Carrusel de Imagenes del Home --}}

{{--  Footer --}}

@section('footer')

<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="span4 copyright"> <small>&copy; 2012 Zetalabs.cl reservados los derechos</small> </div>
				<div class="span8 footer-links"> <a href="#home" title="Home" class="scroll-page">HOME</a> | <a href="#services" title="Services" class="scroll-page">SERVICIOS</a> | <a href="#features" title="Features" class="scroll-page">FEATURES</a> | <a href="#portafolio" title="Work" class="scroll-page">PORTAFOLIO</a> | <a href="#about" title="About" class="scroll-page">NOSOTROS</a> | <a href="#contacto" title="Contact" class="scroll-page">CONTACTO</a> </div>
			</div>
		</div>
	</footer>

@endsection

@section('contenido')
	

	<div id="content" class="container">
	<div class="hero-unit">

		<!-- headin gtext -->
		<p class="ac">
			Somos expertos en Tecnologia, dinos que necesitas. 
		</p>

		<!-- Carousel -->	
		<div id="macbook_carousel">
			<div id="carousel" class="carousel slide" rel="carousel">
				<!-- Carousel items -->				
				<div class="carousel-inner">
					<div class="active item">
						<img src="img/carousel/1.jpg" />
					</div>
					
				</div>
				<!-- Carousel navigation -->
				<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span8">
			<h1 class="lead">
				<b>Web application</b> Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tortor mauris condimentum nibh.
			</h1>
		</div>
		<div class="span4">
			<h3 class="ac">FREE<small> for Solo plan</small></h3>
			<p class="ac">
				<a class="btn btn-large btn-primary" href="plans.html" title=""><b>Sign Up for Free</b></a>
			</p>
		</div>
	</div>

	<hr />

	<div class="row">
		<div class="span4">
			<h2><span class="grey">Work</span> with us</h2>
			 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			<p><a class="" href="#">Read more &raquo;</a></p>
	 	</div>
		<div class="span4">
			<h2><span class="grey">Know more</span> about us</h2>
			 <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			<p><a class="" href="#">Read more &raquo;</a></p>
		</div>
		<div class="span4">
			<h2><span class="grey">Meet</span> us</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="" href="#">Read more &raquo;</a></p>
		</div>
	</div>
	</div>
@endsection