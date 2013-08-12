<?php echo Form::open('mi/ruta'); ?>

<!-- Nombre de usuario-->

<?php echo Form::label('usuario','Usuario');?>
<?php echo Form::text('usuario'); 
	  echo "<br>";?>

<!-- Contraseña-->

<?php echo Form::label('password','Contraseña'); ?>
<?php echo Form::password('password'); 
	  echo "<br>";?>


<?php echo Form::checkbox('admin','yes',false);?>
<?php echo Form::radio('radio','0',true);?>
<?php echo Form::select('roles',array(
0 => 'Usuario',
1 => 'Miembro',
2 => 'Editor',
3 => 'Administrador'),0);?>

<?php echo "<br>";
	  echo Form::email('Correo');?>
<?php echo "<br>";
	  echo Form::file('Archivo');
	  echo "<br>";?>

<!-- Generando campos propios-->
<?php Form::macro('color_zapato',function(){
return '<input type="color_zapato"/>';
});?>
<?php echo Form::color_zapato();?>


<!-- Boton de login-->

<?php echo "<br><br>";
	  echo Form::submit('Login'); ?>

<?php echo Form::close(); ?>

<!-- Obtiene el texto del label Usuario-->
<?php
$nombre=Input::get('usuario');
echo $nombre;
?>

<!-- Obtiene una matriz con todo el contenido del formulario-->
<?php 

$nombre=Input::get();
$cantidad=count($nombre);
foreach ($nombre as $elementos){
echo "$elementos<br>";
//echo $nombre;
}
?>

<?php 
Input::flash('only',array('usuario','password','Correo'));//"flashea" los datos de usuario y contraseña para recuperarlos en 1.php al igual que el método habitual Redirect::to()


//return Redirect::to('1')->with_input('only',array('usuario','password'));
//$datos=Input::old('usuario');
//echo "Hola";

?>
