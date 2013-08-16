@extends('admin.layout')
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/> 
<title>  Página de los usuarios </title>  
</head>

<body>
@section('content')
{{ HTML::style('css/style.css') }}

<h1> Usuarios </h1>

<table align="center" class="links">
<tr> 
	<td>  {{  HTML::link('PDF','Crear PDF')}}                       </td>
	<td>  {{  HTML::link('usuarios/formulario','Crear un Usuario')}}</td>
</tr>
</table>

<br>
<br>
<table class="datos" border="1">
@if($users)

	<tr>
		<td align="center">Rut</td>   
		<td align="center">Nombre</td>  
		<td align="center">Perfil de usuario </td>
		<td align="center">Email</td>
		<td align="center">Teléfono</td>
	</tr> 

		@foreach($users as $user)

		<tr><td>{{$user->id_usuario}} </td>
			<td> {{$user->nombre_user}} </td>
			<td> @if($user->perfil == 1)
			Administrador
			 @else
			Usuario
			 @endif</td>
			 <td>{{$user->email}}</td>
			 <td>{{$user->fono}}</td>
			 <td>{{ HTML::link('usuarios/delete/'.$user->id_usuario,'Borrar') }} </td>
			 <td> {{ HTML::link('usuarios/update/'.$user->id_usuario,'Actualizar') }}</td>
		</tr>
		
		@endforeach

</table>
	
@else
 Todavia no hay ningun usuario
@endif
@stop
@stop

</body>
</html>