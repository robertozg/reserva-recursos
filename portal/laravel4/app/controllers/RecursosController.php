<?php

class RecursosController extends \BaseController {

   

	public function getIndex() 
    {
       $recursos = Recurso::all(); // crear variable users, User::all -> pedimos que devuelva todos los usuarios de la tabla users
       //$users = User::all();
       return View::make('recurso.index')->with('recursos',$recursos); // ruta de la vista , ->with ... nombre de la variable en la view y el valor de la variable
    }

}
