@layout('template/template')


{{--  Titulo de la pagina --}}

@section('titulo')
Zetalabs :: Expertos en Tecnologia
@endsection

{{--  Titulo de la pagina --}}


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

{{-- Seccion Nosotros --}}

@section('nosotros')
<section id="nosotros">
			<article class="page">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">NOSOTROS <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
					<div class="span8">
						<div class="action layers">
							<div class="action-inside clearfix">
								<h2>Somos expertos en Tecnologia.</h2>
								<p>Si, para nosotros la tecnologia y el desarrollo tecnologico es una forma de vida, por lo mismo, ofrecemos las mejores alternativas para que tu peque&ntilde;a o mediana empresa pueda crecer y desarrollarse, de la mano de las ultimas tecnologias disponibles y asesorada por nuestros expertos.</p>
							</div>
						</div>
					</div>
					<div class="span4">
						<div class="well layers">
							<h5>Our client says...</h5>
							<p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster.</p>
							<a href="#" class="label label-info"><strong>John Miller</strong></a> <small>Vice President</small> | <small>Company Name</small> </div>
					</div>
				</div>
				
				<div class="row">
					<div class="span4">
						<h5><i class="icon icon-chevron-right"></i> OUR APPROACH</h5>
						<p><small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
					</div>
					<div class="span4">
						<h5><i class="icon icon-chevron-right"></i> METHODOLOGY</h5>
						<p><small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
					</div>
					<div class="span4">
						<h5><i class="icon icon-chevron-right"></i> CULTURE</h5>
						<p><small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
					</div>
				</div>
				
				<div class="row">
					<div class="span8">
						<h3>Team <small class="label label-info">Click on image to lauch detail in modal window.</small></h3>
						<ul class="thumbnails">
							<li class="span2">
								<div class="well well-small layers"> <a href="#bio1" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
									<h6>Some Name</h6>
									<label class="label label-info">CEO</label>
								</div>
								
								<!--Modal-->
								<div class="modal hide fade" id="bio1" tabindex="-1" role="dialog">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Some Name - CEO</h3>
									</div>
									<div class="modal-body">
										<p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
								<!--Modal--> 
								
							</li>
							<li class="span2">
								<div class="well well-small layers"> <a href="#bio2" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
									<h6>Some Name</h6>
									<label class="label label-info">CTO</label>
								</div>
								
								<!--Modal-->
								<div class="modal hide fade" id="bio2" tabindex="-1" role="dialog">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Some Name - CTO</h3>
									</div>
									<div class="modal-body">
										<p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
								<!--Modal--> 
								
							</li>
							<li class="span2">
								<div class="well well-small layers"> <a href="#bio3" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
									<h6>Some Name</h6>
									<label class="label label-info">Director</label>
								</div>
								
								<!--Modal-->
								<div class="modal hide fade" id="bio3" tabindex="-1" role="dialog">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Some Name - Director</h3>
									</div>
									<div class="modal-body">
										<p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
									</div>
								</div>
								<!--Modal--> 
								
							</li>
							<li class="span2">
								<div class="well well-small layers"> <a href="#bio4" class="thumbnail" data-toggle="modal"> <img src="http://placehold.it/160x120" alt=""> </a>
									<h6>Some Name</h6>
									<label class="label label-info">Developer</label>
								</div>
								
								<!--Modal-->
								<div class="modal hide fade" id="bio4" tabindex="-1" role="dialog">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h3>Some Name - Developer</h3>
									</div>
									<div class="modal-body">
										<p><img src="http://placehold.it/200x300" alt="" class="team-bigger-pic"> Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner. </p>
									</div>
									<div class="modal-footer">
										<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
									</div>
								</div>
								<!--Modal--> 
								
							</li>
						</ul>
					</div>
					<div class="span4">
						<h3>Careers</h3>
						<table class="table table-hover table-bordered table-striped layers">
							<thead>
								<tr>
									<th>#</th>
									<th>Job Opening <span class="label label-info">Place</span></th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Creative Director <span class="label label-info">New York</span></td>
									<td><a href="#" class="btn btn-mini btn-primary">Apply</a></td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>2</td>
									<td>Sr. Designer <span class="label label-info">Ohio</span></td>
									<td><a href="#" class="btn btn-mini btn-primary">Apply</a></td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>3</td>
									<td>Sr. Developer <span class="label label-info">Phoenix</span></td>
									<td><a href="#" class="btn btn-mini btn-primary">Apply</a></td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>4</td>
									<td>iPhone Developer <span class="label label-info">New York</span></td>
									<td><a href="#" class="btn btn-mini btn-primary">Apply</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</article>
		</section>

@endsection

{{-- Fin de seccion Nosotros --}}

{{--  Contacto --}}

@section('contacto')
<section id="contacto">
		<article class="page">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">CONTACTO <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
					<div class="span5">
						<div class="well well-small"> <iframe width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Santiago+Chile&amp;sll=-33.413317,-70.666294&amp;sspn=1.451545,2.90863&amp;ie=UTF8&amp;hq=&amp;hnear=Independencia,+Santiago,+Chile&amp;ll=-33.413317,-70.666294&amp;spn=0.019517,0.018797&amp;z=16&amp;iwloc=near&amp;output=embed"></iframe> </div>
					</div>
						<div class="span3">
						<h4>Informacion de Contacto</h4>
						<p> <!--<i class="icon-user"></i> +1 888 8888 888<br> -->
							<a href="mailto:hola@zetalabs.cl"><i class="icon-envelope"></i> hola@zetalabs.cl<br></a>
							<!--<i class="icon-map-marker"></i> 111th, North Ave, Suite 530, AZ </p>-->
						<hr>
						<h4>Conversemos</h4>
						<small> Comunicate con nosotros, trataremos de responder a tus consultas lo mas rapido posible. </small> </div>
					<div class="span3">
						<h4>Contactanos</h4>
						<form class="form" id="contact-form">
							<!--[if IE]><label for="name">Name</label><![endif]-->
							<input type="text" id="name" name="name" class="span3" style="margin-right:25px;" placeholder="Nombre">
							<!--[if IE]><label for="email">E-mail</label><![endif]-->
							<input id="email" type="text" class="span3" name="email" placeholder="Email">
							<!--[if IE]><label for="message">Message</label><![endif]-->
							<textarea id="message" name="message" placeholder="Mensaje" class="span3" rows="7"></textarea>
							<button type="submit" class="btn btn-primary btn-small">Enviar Mensaje</button>
						</form>
					</div>
					<div class="span1 text-center social">
						<h4>Social</h4>
						<a href="http://facebook.com/zetalabs" rel="tooltip" title="Facebook"><img src="img/facebook.png" alt="" /></a> <a href="http://twitter.com/zetalabscl" rel="tooltip" title="Twitter"><img src="img/twitter.png" alt="" /></a> <a href="#" rel="tooltip" title="Google Plus"><img src="img/googleplus.png" alt="" /></a> <a href="#" rel="tooltip" title="LinkedIn"><img src="img/linkedin.png" alt="" /></a> <a href="#" rel="tooltip" title="Pin Interest"><img src="img/pininterest.png" alt="" /></a> </div>
				</div>
			</div>
		</article>
	</section>
@endsection


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

{{-- Footer --}}



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