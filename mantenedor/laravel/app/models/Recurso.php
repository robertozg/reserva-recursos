<?php

 // ESTA RELACIONADO CON LA BASE DE DATOS

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Recurso extends Eloquent implements UserInterface, RemindableInterface 
{

	protected $table = 'tbl_recurso'; // protected $table = 'users'; usuario

	protected $primaryKey = 'id_recursos';	 

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