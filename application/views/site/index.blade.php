@layout('template/template')

@section('titulo')
Zetalabs :: Home
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