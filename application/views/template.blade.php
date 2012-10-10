<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>@yield('titulo')</title>
	<?php echo HTML::style('css/bootstrap.min.css'); ?>
</head>
<body>
	<div class="header">
		@section('navegacion')
		<li><a href="#">Home</a></li>
		<li><a href="#">Servicios</a></li>
		<li><a href="#">Clientes</a></li>
		@yield_section
	</div>

	@yield('contenido')
<?php echo HTML::script('http://code.jquery.com/jquery-latest.min.js'); ?>
<?php echo HTML::script('js/bootstrap.min.js'); ?>
</body>
</html>