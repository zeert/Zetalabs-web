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
						<p>Nulla at ultrices neque. Cras metus erat, pulvinar vel interdum eu, interdum et nibh.</p>
					</div>
				</div>
			</div>
		</div>
		
		<!--BEGIN: Features -->
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
		</section>
		<!--END: Features --> 
		
		<!--BEGIN: About -->
		<section id="nosotros">
			<article class="page">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">NOSOTROS <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
					<div class="span8">
						<div class="action layers">
							<div class="action-inside clearfix">
								<h2>Welcome to Awesome Company.</h2>
								<p>Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, better, and faster. Bootstrap is built for you. This Biz theme is designed to help people of all skill levels designer or developer, huge nerd or early beginner.</p>
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
		<!--END: About --> 
		
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
	<section id="contacto">
		<article class="page">
			<div class="container">
				<div class="row">
					<div class="span12">
						<h2 class="page-title">CONTACTO <a class="to-top scroll-page" href="#home" title="Ir Arriba"><i class="icon-chevron-up"></i></a></h2>
					</div>
					<div class="span5">
						<div class="well well-small"> <iframe width="100%" height="180" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.cl/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=New+York&amp;sll=-33.668298,-70.363372&amp;sspn=1.451545,2.90863&amp;ie=UTF8&amp;hq=&amp;hnear=Ram%C3%B3n+Freire+466,+Copiap%C3%B3,+Atacama&amp;ll=-27.359449,-70.350801&amp;spn=0.019517,0.018797&amp;z=16&amp;iwloc=near&amp;output=embed"></iframe> </div>
					</div>
					<div class="span3">
						<h4>Informacion de Contacto</h4>
						<p> <!--<i class="icon-user"></i> +1 888 8888 888<br> -->
							<i class="icon-envelope"></i> hola@zetalabs.cl<br>
							<!--<i class="icon-map-marker"></i> 111th, North Ave, Suite 530, AZ </p>-->
						<hr>
						<h4>Text</h4>
						<small> Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. </small> </div>
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