<html>
<head>
	<meta charset="utf-8" />
	<title>Sistema de Reserva de Recursos - Escuela de Inform&aacute;tica UTEM</title>
        
	<meta name="description" content="">
	<meta name="author" content="">
	
</head>
    <body>
    <header>
			<div class="row">
				<h1>Sistema de Reserva de Recursos </h1>
                                <h1> Recursos </h1>
                                <h2>Escuela de informática UTEM</h2>
				<hr>
			</div>
</header>
<nav>
			<ul>
				<a href="home"><li><strong>Inicio</strong></li></a>
				<a href="sitios"><li><strong>Enlaces</strong></li></a>
				<a href="contacto"><li><strong>Cont&aacute;ctanos</strong></li></a>
			</ul>
</nav>



<a href="recursos">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Ver Recursos</strong></span></div>
</div>
</a>

<a href="reservas">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Pedir Recursos</strong></span></div>
</div>
</a>
        @if($recursos)
	<ul>
		@foreach($recursos as $recurso)
		<li> 
			ID: {{$recurso->id_recursos}} - 
			Nombre: {{$recurso->nombre_recurso}} -
			Descripción: {{$recurso->descripcion}} -
                        
                        @if($recurso->estado == 1)
                        Estado: Desocupado 
                        {{HTML::link('reservas/'.$recurso->id_recursos,'Pedir')}}
                        @else
			Estado: ocupado
                        @endif
		</li>
		@endforeach
	</ul>
@else
 Todavia no hay ningun recurso
@endif



<footer>&#169; 2013 Escuela de Informática UTEM - Sistema de Reserva de Recursos</footer>
        @yield('content')
    </body>
</html>









