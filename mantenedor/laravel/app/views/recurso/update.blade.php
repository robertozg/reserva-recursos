<h1>Actualizar un Recurso </h1>

{{ Form::open() }}

Tipo: {{ Form::text('tipo',$recurso->tipo)}} <br />

Descripcion:  {{ Form::text('descripcion',$recurso->descripcion)}} <br />

Encargado:  {{ Form::text('encargado',$recurso->id_encargado)}} <br />

Estado: {{ Form::text('estado',$recurso->estado)}} <br />

{{ Form::submit('Actualizar Recurso')}}

@if($errors->has()) 	
<ul>
            {{ $errors->first('Nombre','<li> :message </li>') }}
            {{ $errors->first('password','<li> :message </li>') }}
            {{ $errors->first('tipo','<li> :message </li>') }}
            {{ $errors->first('email','<li> :message </li>') }}
</ul>
@endif

{{ Form::close() }}