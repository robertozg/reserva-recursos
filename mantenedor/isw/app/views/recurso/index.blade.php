<h1> Recursos </h1>

@if($recursos)
	<ul>
		@foreach($recursos as $recurso)
		<li> 
			ID: {{$recurso->id_recursos}} - 
			Nombre: {{$recurso->nombre_recurso}} -
			Descripción: {{$recurso->descripcion}} -
			{{ HTML::link('recursos/delete/'.$recurso->id_recursos,'Borrar') }} - 
			{{ HTML::link('recursos/update/'.$recurso->id_recursos,'Actualizar') }} 
		</li>
		@endforeach
	</ul>
@else
 Todavia no hay ningun recurso
@endif

{{  HTML::link('recursos/formulario','Crear un Recurso')}} -------- {{  HTML::link('logout','Logout')  }}  -------  {{  HTML::link('admin','Admin')  }} ---- 

