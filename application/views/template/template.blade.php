<!DOCTYPE html>
<html>
<head>
	<!-- Title -->
	<title>@yield('titulo')</title>
	
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114x114-precomposed.png">
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72x72-precomposed.png">
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57x57-precomposed.png">
	
	<!-- Google Web Fonts -->
	<?php echo HTML::style('http://fonts.googleapis.com/css?family=Oswald:300'); ?>
	
	
	<!-- Bootstrap CSS -->
	<?php echo HTML::style('css/bootstrap.min.css'); ?>
	
	<!-- Custom CSS -->
	<?php echo HTML::style('css/style.css'); ?>
	

	<!--[if lt IE 9]>
	<?php echo HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js'); ?>
    <?php echo HTML::script('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'); ?>
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#primary-navigation">

	<!--BEGIN: Navigation -->
	@yield('menu')
	<!--END: Navigation --> 

	<!--BEGIN: Project Carousel-->
	@yield('carrusel')
	<!--END: Project Carousel--> 
	
	<!--BEGIN: Main Container -->
	<div class="container">
		<p>&nbsp;</p>
		<div class="row">
			<div class="span12">
				<div class="action layers">
					<div class="action-inside clearfix">
						<h2>Zetalabs, desarrollo tecnologico a la medida de tus necesidades</h2>
						<p>Estamos preparados para dar solucion a tus inquietudes en seguridad, desarrollo, implementacion y mantencion de tus plataformas tecnologicas.</p>
					</div>
				</div>
			</div>
		</div>
		
		<!--BEGIN: Features 
		<section id="servicios">
			<article class="page">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">Servicios <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
				</div>
				<div class="row">
					<div class="span4">
						<div class="well layers">
							<h3>Amazing Features</h3>
							<p>This theme has tons of amazing features. Tabs, lightbox, carausel and many more</p>
						</div>
					</div>
					<div class="span4">
						<div class="well layers">
							<h3>Responsive</h3>
							<p>This theme will work on any device any resolution. Cool...isn't it.</p>
						</div>
					</div>
					<div class="span4">
						<div class="well layers">
							<h3>Top Notch Support</h3>
							<p>If you're having any problems, I am ready to help. Totally free support.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span4">
						<div class="alert alert-info layers">
							<h5><i class="icon icon-briefcase"></i> Ultimate Theme</h5>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					</div>
					<div class="span4">
						<div class="alert alert-danger layers">
							<h5><i class="icon icon-check"></i> Modern Design</h5>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					</div>
					<div class="span4">
						<div class="alert alert-success layers">
							<h5><i class="icon icon-align-center"></i> Simple Layout</h5>
							<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					</div>
					<div class="span4">
						<h5><i class="icon icon-eye-open"></i> Make Standout</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					<div class="span4">
						<h5><i class="icon icon-facetime-video"></i> Attract Visitors</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					<div class="span4">
						<h5><i class="icon icon-edit"></i> Easy to Customize</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
				</div>
			</article>
		</section>-->
		<!--END: Features --> 
		
		<!--BEGIN: Nosotros -->
		
			@yield('nosotros')

		<!--END: Nosotros --> 
		
		<!--BEGIN: Services -->
		<section id="services">
			<article class="page">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">Services <a class="to-top scroll-page" href="#home" title="Ir Arriba" rel="tooltip"><i class="icon-chevron-up"></i></a></h2>
					</div>
				</div>
				<div class="row">
					<div class="span4">
						<div class="well">
							<h2>Software Solutions & IT Services</h2>
							<p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
						</div>
					</div>
					<div class="span4">
						<h5><i class="icon icon-briefcase"></i> Web Design & development</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
						<hr />
					</div>
					<div class="span4">
						<h5><i class="icon icon-move"></i> Mobile Apps</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
						<hr />
					</div>
					<div class="span4">
						<h5><i class="icon icon-eye-open"></i> Search Engine Optimization</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
					<div class="span4">
						<h5><i class="icon icon-bookmark"></i> IT Consulting</h5>
						<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small> </div>
				</div>
				
				<hr />
				
				<div class="row">
					<div class="span3">
						<h4>Java Platform</h4>
						<small>
						<ul>
							<li>Enterprise Architecture</li>
							<li>SAAS</li>
							<li>SOA</li>
							<li>Structs/JSF/JSP/EJP/J2EE</li>
							<li>Eclipse PDE</li>
							<li>Apache Foundation</li>
							<li>Meta Data</li>
							<li>Lucen</li>
						</ul>
						</small> </div>
					<div class="span3">
						<h4>Microsoft Platform</h4>
						<small>
						<ul>
							<li>.NET (Desktop/Mobile /Web APPS)</li>
							<li>Office Automation</li>
							<li>Custom Authentication</li>
							<li>Exchange Server</li>
						</ul>
						</small> </div>
					<div class="span3">
						<h4>Web Solutions</h4>
						<small>
						<ul>
							<li>Custom Application</li>
							<li>E-Commerce</li>
							<li>Os-Commerce</li>
							<li>Drupal</li>
							<li>Joomla</li>
							<li>E-learning</li>
							<li>LAMP</li>
							<li>Portals</li>
						</ul>
						</small> </div>
					<div class="span3">
						<h4>Testing Solutions</h4>
						<small>
						<ul>
							<li>Manual/Automated Load Testing</li>
							<li>Performance</li>
							<li>Multi User Testing</li>
							<li>Distributed Deployment</li>
						</ul>
						</small> </div>
				</div>
				
				<hr />
				
				<blockquote>
					<div class="well">
						<p><em>I recommend this company as a highly reliable and professional web development company. They developed a big B2B marketplace for us. The project was done on time an on budget that was extremely important for our organization.</em></p>
						<p><small><strong>Tom</strong>, CTO | USA </small> </p>
					</div>
				</blockquote>
				<hr />
				
			</article>
		</section>
		<!--END: Services --> 
		
		<!--BEGIN: Work -->
		<section id="portafolio">
			<article class="page">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">PORTAFOLIO <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
					<div class="span12">
						<p><strong>Select type of work:</strong></p>
						<ul class="nav nav-pills" id="work-tabs">
							<li class="active"><a href="#work-featured" data-toggle="pill">Featured</a></li>
							<li><a href="#work-web" data-toggle="pill">Web</a></li>
							<li><a href="#work-print" id="print" data-toggle="pill">Print</a></li>
							<li><a href="#work-mobile" data-toggle="pill">Mobile</a></li>
							<li><a href="#work-illustration" data-toggle="pill">Illustrations</a></li>
						</ul>
						<div class="tab-content"> 
							<!--BEGIN: Work Featured-->
							<div class="tab-pane fade in active" id="work-featured">
								<div class="row">
									<div class="span6">
										<div class="action layers">
											<div class="action-inside clearfix">
												<h5>Project Name</h5>
												<a href="#" class="thumbnail"> <img src="http://placehold.it/520x380" alt=""> </a> </div>
										</div>
									</div>
									<div class="span6">
										<div class="well">
											<h4>There are 4 types of layout for the portfolio/work. Please select type of work and notice how you can place your deisgn work in different manner.</h4>
											<p><small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small></p>
										</div>
										<ul class="thumbnails clearfix">
											<li class="span3">
												<div class="action layers">
													<div class="action-inside clearfix">
														<h5>Project Name</h5>
														<a href="#" class="thumbnail"> <img src="http://placehold.it/320x270" alt=""> </a> </div>
												</div>
											</li>
											<li class="span3">
												<div class="action layers">
													<div class="action-inside clearfix">
														<h5>Project Name</h5>
														<a href="#" class="thumbnail"> <img src="http://placehold.it/320x270" alt=""> </a> </div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!--END: Work Featured--> 
							<!--BEGIN: Work Web-->
							<div class="tab-pane fade" id="work-web">
								<ul class="thumbnails">
									<li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
									<li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
									<li class="span5"> <a href="#" class="thumbnail"> <img src="http://placehold.it/460x120" alt=""> </a> </li>
									<li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
									<li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
									<li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
								</ul>
							</div>
							<!--END: Work Web--> 
							<!--BEGIN: Work Print-->
							<div class="tab-pane fade" id="work-print">
								<ul class="thumbnails">
									<li class="span6"> <a href="#" class="thumbnail"> <img src="http://placehold.it/560x270" alt=""> </a> </li>
									<li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
									<li class="span3"> <a href="#" class="thumbnail"> <img src="http://placehold.it/260x120" alt=""> </a> </li>
									<li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
									<li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
									<li class="span2"> <a href="#" class="thumbnail"> <img src="http://placehold.it/160x120" alt=""> </a> </li>
								</ul>
							</div>
							<!--END: Work Prin--> 
							<!--BEGIN: Work Mobile-->
							<div class="tab-pane fade" id="work-mobile">
								<ul class="thumbnails">
									<li class="span4">
										<div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
									</li>
									<li class="span4">
										<div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
									</li>
									<li class="span4">
										<div class="well layers"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </div>
									</li>
								</ul>
							</div>
							<!--END: Work Mobile--> 
							<!--BEGIN: Work Mobile-->
							<div class="tab-pane fade" id="work-illustration">
								<ul class="thumbnails">
									<li class="span12"> <a href="#" class="thumbnail"> <img src="http://placehold.it/1170x100" alt=""> </a> </li>
									<li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
									<li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x270" alt=""> </a> </li>
									<li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x120" alt=""> </a> </li>
									<li class="span4"> <a href="#" class="thumbnail"> <img src="http://placehold.it/360x120" alt=""> </a> </li>
								</ul>
							</div>
							<!--END: Work Mobile--> 
						</div>
					</div>
				</div>
			</article>
		</section>
		<!--END: Work --> 
		
	</div>
	<!-- /.container --> 
	<!--END: Main Container --> 
	
	<!--BEGIN: Contact -->
	@yield('contacto')
	<!--END: Contact --> 
	
	<!--BEGIN: Footer -->
	@yield('footer')
	<!--END: Footer--> 

<!-- Scripts --> 
<?php echo HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'); ?>
<?php echo HTML::script('js/bootstrap.min.js'); ?>
<?php echo HTML::script('js/custom.js'); ?>
</body>
</html>