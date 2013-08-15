
Login !!

<form method= "POST">

	RUT: <input type = "text" name = "rut" /> <br />

	Password: <input type = "password" name = "password" /> <br />

	<input type = "submit" value = "Nombre boton" />

@if (Session::has('login_errors'))
<span class="error">Usuario o contraseña incorrectas.</span>
@endif
</form>
@if($errors->has())  
    <ul>
            {{ $errors->first('rut','<li> :message </li>') }}
            {{ $errors->first('password','<li> :message </li>') }}
   </ul>	
 @endif

