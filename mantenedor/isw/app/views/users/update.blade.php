<h1>Actualizar un Usuario </h1>

{{ Form::open() }}

Nombre: {{ Form::text('nombre',$user->nombre_user)}} <br />

Email:  {{ Form::text('email',$user->email)}} <br />

Perfil de usuario:  {{ Form::text('perfil',$user->perfil)}} <br />

Password:  {{ Form::password('password')}} <br />

Telefóno:  {{ Form::text('fono',$user->fono)}} <br />

{{ Form::submit('Actualizar usuario')}}

@if($errors->has()) 	
<ul>
            {{ $errors->first('Nombre','<li> :message </li>') }}
            {{ $errors->first('password','<li> :message </li>') }}
            {{ $errors->first('tipo','<li> :message </li>') }}
            {{ $errors->first('email','<li> :message </li>') }}
</ul>
@endif

{{ Form::close() }}