
CREAR USUARIO 

<form method= "POST">

	Nombre: <input type = "text" name = "nombre"/> <br />
    
	RUT: <input type = "text" name = "rut" /> <br />

	Password: <input type = "password" name = "password" /> <br />

	Confirmar password: <input type="password" name="password_confirmation">  </br>

	Perfil de usuario:  {{  Form::select('perfil', array(
                  1 => 'Usuario',
                  2 => 'Admnistrador'));   }}  <br />

    Email: <input type = "text" name = "email" /> <br />

    Teléfono: <input type = "text" name = "fono" /> <br />

	<input type = "submit" value = "Crear usuario" />

    @if($errors->has())  
    <ul>
            {{ $errors->first('nombre','<li> :message </li>') }}
            {{ $errors->first('rut','<li> :message </li>') }}
            {{ $errors->first('password','<li> :message </li>') }}
            {{ $errors->first('password_confirmation','<li> :message </li>') }}
            {{ $errors->first('tipo','<li> :message </li>') }}
            {{ $errors->first('email','<li> :message </li>') }}
            {{ $errors->first('fono','<li> :message </li>') }}
    </ul>	
    @endif

</form>
