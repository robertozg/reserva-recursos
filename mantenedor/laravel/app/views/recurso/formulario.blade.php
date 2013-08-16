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

<h1>Crear Recurso<h1>


{{Form::open()}}
<table>
<tr class="login">
  <td class="login">Nombre Recurso:                  </td>
  <td class="login">{{Form::text('nombre')}}         </td>
</tr>

<tr class="login">
  <td class="login">ID Recurso:                      </td>
  <td class="login">{{Form::text('id')}}             </td>
</tr>

<tr class="login">    
  <td class="login">Tipo:                            </td>
  <td class="login"> {{  Form::select('tipo', array(
                  1 => 'Laboratorio',
                  2 => 'Proyector',
                  3 => 'Computador',
                  4 => 'Otros'));   }} </td>
</tr>

<tr class="login">
  <td class="login"> Descripción:                       </td>
  <td class="login"> {{ Form::textarea('descripcion')}} </td>
</tr> 

<tr class="login">
  <td class="login"> Encargado:                       </td>
  <td class="login"> {{Form::text('encargado')}}      </td>
</tr>

<tr class="login">
  <td class="login"> Estado:                        </td>
  <td class="login"> {{  Form::select('estado', array(
                  1 => 'Activo',
                  0 => 'No activo'));   }} </td>
</tr>

<tr class="login"> <td class="login"> {{ Form::submit('Crear Recurso') }} </td> </tr>

</table>
{{Form::close()}}



    @if($errors->has())  
    <ul>
            {{ $errors->first('Nombre','<li> :message </li>') }}
            {{ $errors->first('id','<li> :message </li>') }}
            {{ $errors->first('tipo','<li> :message </li>') }}
            {{ $errors->first('descripcion','<li> :message </li>') }}
            {{ $errors->first('encargado','<li> :message </li>') }}
            {{ $errors->first('estado','<li> :message </li>') }}

    </ul>	
    @endif
    @stop
    @stop

</body>
</html>
