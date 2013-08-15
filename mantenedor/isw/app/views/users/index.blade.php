
<h1> Usuarios </h1>

@if($users)
	<ul> Nombre    -     ID  -    PERFIL 
		@foreach($users as $user)
		<li>{{$user->nombre_user}} - {{$user->id_usuario}} -{{$user->perfil}}{{ HTML::link('usuarios/delete/'.$user->id_usuario,'Borrar') }} - {{ HTML::link('usuarios/update/'.$user->id_usuario,'Actualizar') }}
		</li>
		@endforeach
	</ul>
@else
 Todavia no hay ningun usuarios
@endif

{{  HTML::link('usuarios/formulario','Crear un Usuario')}} -------- {{  HTML::link('logout','Logout')  }}  -------  {{  HTML::link('admin','Admin')  }}
