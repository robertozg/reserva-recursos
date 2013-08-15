<?php

 // ESTA RELACIONADO CON LA BASE DE DATOS

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Reserva extends Eloquent implements UserInterface, RemindableInterface 
{


	protected $table = 'RESERVAS';

	protected $primaryKey = 'ID_Reserva';	 

	public $timestamps = false;

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->password; // return $this->password;
	}


	public function getReminderEmail()
	{
		return $this->email;	 // return $this->email;
	}


}