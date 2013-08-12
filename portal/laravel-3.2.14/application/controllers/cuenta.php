<?php

class Cuenta_Controller extends Base_Controller
{

	public function action_index()
	{
		echo "Esta es la p�gina del perfil";
	}

	public function action_login()
	{
		return View::make('1');
	}

	public function action_logout()
	{
		echo "Esta es la acci�n de cierre de sesi�n";
	}
	
	public function action_bienvenida($nombre,$lugar)
	{
	 return View::make('bienvenida')
	 				->with('nombre',$nombre)
					->with('lugar',$lugar);
	}
}
