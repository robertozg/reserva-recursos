<!DOCTYPE HTML>
<html lang="es-ES"><head>   
    
    
    <title>Probando el plugin jQuery de calendario_dw</title>
	<link href="calendario_dw/calendario_dw-estilos.css" type="text/css" rel="STYLESHEET">
	<style type="text/css">
	body{
		font-family: tahoma, verdana, sans-serif;
	}
	</style>
	<script type="text/javascript" src="calendario_dw/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="calendario_dw/calendario_dw.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$(".campofecha").calendarioDW();
	})
	</script>
	
          
    
        <meta charset="UTF-8">
       
       <title>Sistema de Reserva de Recursos - Escuela de Inform&aacute;tica UTEM</title>
    </head>
    <body>
        <div class="row">     
            <h1>Sistema de Reserva de Recursos </h1>
                                <h2>Escuela de informática UTEM</h2>
                                <h3>Pedir un recurso</h3>
             <div class="small-12 columns">
                <!--pintamos el formulario haciendo uso de la clase form de laravel-->
            <div >
    	                        
        
	
			<form>
			Fecha: <input type="text" name="fecha" class="campofecha" size="12">
			</form>   
            </div>
            
            
            
            <!--en este div mostramos el preloader-->
            <div style="margin: 10px 0px 0px 48%" class="before"></div>   
            <!--en este los errores del formulario--> 
            <div class="errors_form"></div>
            <!--en este el mensaje de registro correcto-->
            <div style="display: none" class="success_message alert-box success"></div>     
            
            </div>       
        </div>
        
        <div >
        <h1> Horario </h1>
        
        <?php
 

echo"SELECIONE CURSO: <select name='curso'>";




echo "<option value='".$fila['']."'> ".$fila['']."</option>";
 "</select>";

 
?>
        
        
        </div>
        
        <div class="row">
            <!--al pulsar en el bot�n debajo de �ste mostraremos los usuarios registrados-->
             <div class="small-12 pull users expand round">    
                <!--div para mostrar un preloader mientras cargamos los usuarios-->
                <div style="margin: 10px 0px 0px 48%" class="preload_users"></div>
                <!--aqu� se mostrar�n los usuarios-->
                <div class="load_ajax"></div>
            </div>
        </div>
    </body>
</html>
