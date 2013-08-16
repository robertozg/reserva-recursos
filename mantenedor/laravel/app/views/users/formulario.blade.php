@extends('admin.layout')
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8"/> 
<title>  Formulario Recursos </title>  
</head>

<body>
@section('content')
{{ HTML::style('css/style.css') }}

<h1>Crear Usuario<h1>

    {{Form::open()}}

<table>
    <tr class="login">
	   <td class="login">Nombre:                   </td>
       <td class="login"> {{Form::text('nombre')}} </td>
    </tr>
    <tr class="login">  
       <td class="login"> RUT:                     </td>
       <td class="login"> {{Form::text('rut','Rut con digito verificador')}}    </td>
    </tr>
    <tr class="login">
        <td class="login">Password:                       </td> 
        <td class="login">{{Form::password('password')}}  </td>
    </tr>
    <tr class="login">
        <td class="login">  Confirmar password:                          </td>
        <td class="login">  {{Form::password('password_confirmation')}}  </td>
    </tr>
    <tr class="login"> 
        <td class="login">    Perfil de usuario:                           </td> 
        <td class="login">  {{  Form::select('perfil', array(
                                             2 => 'Usuario',
                                              1 => 'Admnistrador'));   }}  </td>
    </tr>
    <tr class="login">
        <td class="login"> Email:                     </td>
        <td class="login"> {{ Form::text('email')}}   </td>
    </tr>   
    <tr class="login">
        <td class="login"> Teléfono:                   </td>
        <td class="login"> {{Form::text('fono')}}     </td>

    <tr class="login">
        <td class="login">	{{Form::submit('Crear usuario')}} </td>
    </tr>

</table>
    {{Form::close()}}

    @if($errors->has())  
    <ul>
            {{ $errors->first('nombre','<li> :message </li>') }}
            {{ $errors->first('rut','<li> :message </li>') }}
            {{ $errors->first('password','<li> :message </li>') }}
            {{ $errors->first('password_confirmation','<li> :message </li>') }}
            {{ $errors->first('perfil','<li> :message </li>') }}
            {{ $errors->first('email','<li> :message </li>') }}
            {{ $errors->first('fono','<li> :message </li>') }}
    </ul>	
    @endif
    @stop
    @stop
</body>
</html>
