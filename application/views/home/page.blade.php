@layout('template')

@section('titulo')
Pagina de Prueba de Blade
@endsection

@section('navegacion')
	@parent
	<li><a href="#">Test de MEnu anidado</a></li>
@endsection

@section('contenido')
	<h1>test de contenido desde Blade</h1>
	<p>test de contenido anidado desde blade</p>
@endsection