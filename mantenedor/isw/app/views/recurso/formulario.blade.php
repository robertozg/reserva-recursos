
CREAR RECURSO 
<form method= "POST">

    Nombre Recurso: <input type = "text" name = "nombre"/> no esta en la bd asdas<br />

	ID Recurso <input type = "integer" name = "id"/> <br />
    
	Tipo: <input type = "text" name = "tipo" /> <br />

	Descripcion: <input type = "text" name = "descripcion" /> <br />

	Encargado: <input type="text" name="encargado">  </br>

	Estado: <input type = "text" name = "estado" /> <br />

    <input type = "submit" value = "Crear Recurso" />

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

</form>

