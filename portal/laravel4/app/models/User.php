<?php

use Zizaco\Entrust\Hasrole;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface 
{
	protected $table = 'tbl_usuarios'; // protected $table = 'users'; usuario
	protected $primaryKey = 'id_usuario';	 // invento
	// protected $fillable = array('email','rut');
	protected $hidden = array('password'); // protected $hidden = array('password');
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

    public function setPasswordAttribute($value)
    {
    	$this->attributes['password'] = Hash::make($value);
    }
         
   
}