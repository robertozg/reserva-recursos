<!DOCTYPE HTML>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
       
       <title>Sistema de Reserva de Recursos - Escuela de Inform&aacute;tica UTEM</title>
    </head>
    <body>
        <div class="row">     
            <h1>Sistema de Reserva de Recursos </h1>
                                <h2>Escuela de inform√°tica UTEM</h2>
                                <h3>Pedir un recurso</h3>
             <div class="small-12 columns">
                <!--pintamos el formulario haciendo uso de la clase form de laravel-->
            <div class="form">
              
                {{ Form::open(array('url' => 'ajax', 'class' => 'register_ajax')) }}
                
                {{ Form::label('email', 'Email') }}
 
                {{ Form::email('email', Input::old('email')) }}
                
                {{ Form::label('username', 'Nick') }}
 
                {{ Form::text('username', Input::old('username')) }}
 
                {{ Form::label('password', 'Password') }}
 
                {{ Form::password('password') }}
 
                 {{ Form::label('password_confirmation', 'Confirm password') }}
 
                {{ Form::password('password_confirmation') }}
                
                <br />
                {{ Form::submit('Pedir', array("class" => "button expand round")) }}
 
                {{ Form::close() }}
            </div>
            <!--en este div mostramos el preloader-->
            <div style="margin: 10px 0px 0px 48%" class="before"></div>   
            <!--en este los errores del formulario--> 
            <div class="errors_form"></div>
            <!--en este el mensaje de registro correcto-->
            <div style="display: none" class="success_message alert-box success"></div>     
            </div>       
        </div>
        <div class="row">
            <!--al pulsar en el botÛn debajo de Èste mostraremos los usuarios registrados-->
             <div class="small-12 pull users expand round">    
                <!--div para mostrar un preloader mientras cargamos los usuarios-->
                <div style="margin: 10px 0px 0px 48%" class="preload_users"></div>
                <!--aquÌ se mostrar·n los usuarios-->
                <div class="load_ajax"></div>
            </div>
        </div>
    </body>
</html>

