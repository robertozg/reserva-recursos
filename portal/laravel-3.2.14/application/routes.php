<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/

Route::get('/', function()
{
	return View::make('index');
});

/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('before', function()
{
	// Haz algo antes de cada peticion a tu aplicacion
    
});

/*Route::get('usuario/(:any)/tarea/(:num)', function($usuario,$numero_tarea)
{
$datos=array(
						 'usuario' => $usuario,
						 'tarea' => $numero_tarea);
return View::make('home.index',$datos);
});*/
Route::filter('after', function($response)
{
	// Haz algo despues de cada peticion a tu aplicacion
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});
//** Ruta a cuenta.php
//Route::controller('cuenta');

//** Ruta con el verbo HTTP GET, donde (:any) permite recibir parametros, a la accion bienvenida del controlador cuenta
//Route::get('superbienvenida/(:any)/(:any)','cuenta@bienvenida');

//** Ruta con closure que muestra la vista 1.php
//Route::get('/',function()
//{
// return View::make('1');
// });

Route::get('ver', function() 
{ 
  return View::make('ver'); 
});
Route::get('agregar', function() 
{ 
  return View::make('agregar'); 
});

Route::get('academicos', function()
{
	return View::make('academicos/academicos');
});

Route::get('pedir', function()
{
	return View::make('pedir/pedir');
});

Route::get('carreras', function()
{
	return View::make('carreras/carreras');
});

Route::get('alumnos', function()
{
	return View::make('alumnos/alumnos');
});

Route::get('sitios', function()
{
	return View::make('sitiosdeinteres');
});

Route::get('contacto', function()
{
	return View::make('contacto');
});

Route::get('mision', function()
{
	return View::make('escuela/mision');
});

Route::get('jornadacompleta', function()
{
	return View::make('academicos/completa');
});

Route::get('jornadaparcial', function()
{
	return View::make('academicos/parcial');
});

Route::get('cargosacademicos', function()
{
	return View::make('academicos/cargosacademicos');
});

Route::get('contador', function()
{
	return View::make('contador/contador');
});



 //** Ruta con closure que recibe parametros usuario y numero, y retorna la vista index
/*Route::get('usuario/(:any)/tarea/(:num)', function($usuario,$numero_tarea)
{
$datos=array(
						 'usuario' => $usuario,
						 'tarea' => $numero_tarea);
return View::make('home.index',$datos);
});*/

//** Ruta direccionando a 1.php desde index
/*Route::get('/',function()
{
  return Redirect::to('../1');
	});*/
	
//** Ruta con nombre y apodo perfil: retorna la vista home.index al llamar miproyecto.dev/cuenta/perfil
/*Route::get('cuenta/perfil',array('as' => 'perfil','do' => function()
{
  				return View::make('home.index');
					}));
					
Route::get('/',function()
{
  		    return Redirect::to_route('perfil');
					});*/
					

//echo HTML::link_to_action('cuenta@login','Login!');