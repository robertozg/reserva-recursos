<!DOCTYPE HTML>
<html lang="es-ES">
    <head>
        
	<meta charset="utf-8" />
	<title>Sistema de Reserva de Recursos - Escuela de Inform&aacute;tica UTEM</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
        <!--cargamos los archivos css y js-->
        {{ HTML::style('css/foundation.min.css') }}
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/functions.js') }}
        <!--nuestro título podrá ser modificado-->   
    </head>
    <body>
    <header>
			<div class="row">
				<h1>Sistema de Reserva de Recursos </h1>
                                <h2>Escuela de informática UTEM</h2>
				<hr>
			</div>
<embed wmode="transparent" src="http://www.poodwaddle.com/clock5" width="100" height="100" type="application/x-shockwave-flash" bgcolor="#FFFFFF" />
</header>
        <div class="row">     
            <h2 class="subheader">Formulario de registro</h2> 
             <div class="small-12 columns">
                <!--pintamos el formulario haciendo uso de la clase form de laravel-->
            <div class="form">
            <nav>
			<ul>
				<a href="home"><li><strong>Inicio</strong></li></a>
				<a href="sitios"><li><strong>Enlaces</strong></li></a>
				<a href="contacto"><li><strong>Cont&aacute;ctanos</strong></li></a>
			</ul>
</nav>
<a href="ver">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Ver Recursos</strong></span></div>
</div>
</a>

<a href="pedir">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Pedir Recursos</strong></span></div>
</div>
</a>
<a href="agregar">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Agregar Recursos</strong></span></div>
</div>
</a>

<a href="carreras">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Gestion</strong></span></div>
</div>
</a>

<a href="academicos">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Acad&eacute;micos</strong></span></div>
</div>
</a>
<a href="academicos">
<div class="row">
	<div class="grid_12"><span class="example"><strong>Alumnos</strong></span></div>
</div>
</a>
              
                {{ Form::open(array('url' => 'ajax', 'class' => 'register_ajax')) }}
                
                  {{ Form::label('id_usuario', 'RUT') }}
 
                {{ Form::text('id_usuario', Input::old('id_usuario')) }}
                
                {{ Form::label('nombre_user', 'Nombre') }}
 
                {{ Form::text('nombre_user', Input::old('nombre_user')) }}
                
                {{Form::label('perfil', 'Perfil') }}
                 {{ Form::text('perfil', Input::old('perfil')) }}
                
                {{ Form::label('email', 'Email') }}
 
                {{ Form::email('email', Input::old('email')) }}
                
                 {{ Form::label('fono', 'Fono') }}
 
                {{ Form::text('fono', Input::old('fono')) }}
                
                {{ Form::label('password', 'Password') }}
 
                {{ Form::password('password') }}
 
                 {{ Form::label('password_confirmation', 'Confirm password') }}
 
                {{ Form::password('password_confirmation') }}
                
                <br />
                {{ Form::submit('Regístrarme', array("class" => "button expand round")) }}
 
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
            <!--al pulsar en el botón debajo de éste mostraremos los usuarios registrados-->
             <div class="small-12 pull users expand round">
                {{ HTML::link(URL::to('#'), 
                'Ver usuarios registrados', 
                array("class" => "button round expand success show_users")) }}     
                <!--div para mostrar un preloader mientras cargamos los usuarios-->
                <div style="margin: 10px 0px 0px 48%" class="preload_users"></div>
                <!--aquí se mostrarán los usuarios-->
                <div class="load_ajax"></div>
            </div>
        </div>
        <footer>&#169; 2013 Escuela de Informática UTEM - Sistema de Reserva de Recursos</footer>
    </body>
</html>