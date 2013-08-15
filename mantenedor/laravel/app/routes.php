<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
	return View::make('hello');
});

/////////////////////////////////////////////////////////////////////
   
Route::controller('usuarios','UserController');  // nombre de la pagina, nombre del controlador 

Route::controller('recursos','RecursosController');

Route::controller('reservas','ReservasController');

//////////////////////////////////////////////////////////////////////

Route::controller('login','AuthController');  
// ::any('login','AuthController@getLogin') nombre para entrar , Controlador@FuncionControlador

Route::get('logout','AuthController@getLogout');

/////////// FILTROS /////////////////////////////////////////////////////////////////////

Route::get('admin', array('before' => 'auth', function()
{
 return View::make('admin.dashboard'); // ruta de la vista
}));
