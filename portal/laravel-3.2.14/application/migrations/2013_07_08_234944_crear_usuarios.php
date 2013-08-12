<?php

class Crear_Usuarios {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios',function($tabla){
			$tabla->increments('id');
			
			$tabla->string('usuario',32);
			$tabla->string('correo',320);
			$tabla->string('password',64);
			
			$tabla->integer('rol');
			
			$tabla->boolean('activo');
			
			$tabla->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuarios');
	}

}