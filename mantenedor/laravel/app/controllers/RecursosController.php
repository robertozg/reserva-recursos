<?php

class RecursosController extends \BaseController {

   public function __construct() // no deja acceder a nada de UserController sin estar autentificado
   {  
    $this->beforeFilter('auth'); 
   }

	public function getIndex() 
    {
       $recursos = Recurso::all(); // crear variable users, User::all -> pedimos que devuelva todos los usuarios de la tabla users
       //$users = User::all();
       return View::make('recurso.index')->with('recursos',$recursos); // ruta de la vista , ->with ... nombre de la variable en la view y el valor de la variable
    }

    public function getFormulario()
    {
    	return View::make('recurso.formulario'); // directorio de la vista
    }

    public function postFormulario()
  {
     // Validación  
    $rules = array(  
      'nombre'         => 'Required|Min:3|Max:50',
      'id'             => 'Required|Unique:tbl_recurso,id_recursos|Integer',
      'tipo'           => 'Required|Integer|Between:1,4',
      'descripcion'    => 'Required',
      'encargado'      => 'Required|exists:tbl_usuarios,id_usuario',
      'estado'         => 'Required|Integer|Between:0,1', 
      );

    $validator = Validator::make(Input::all(),$rules); 
   
    if($validator->passes())
  { 
      $recurso = new Recurso;

      $recurso->nombre_recurso = Input::get('nombre'); // falta en el formulario   
      $recurso->id_recursos = Input::get('id');
      $recurso->tipo = Input::get('tipo');
      $recurso->descripcion = Input::get('descripcion');
      $recurso->id_encargado = Input::get('encargado');
      $recurso->estado = Input::get('estado');

      $recurso->save();

      return Redirect::to('recursos');
     
  }else{   
      return Redirect::back()->withErrors($validator)->withInput();
       }   
  }

//////////////////////////////////////////////////////////////////////////

    public function getDelete($recurso_id)
    {  
      $recurso= Recurso::find($recurso_id);

      if(is_null($recurso))
      {
      	return Redirect::to('recursos'); // nombre de la ruta
      }   	

      $recurso->delete();

      return Redirect::to('recursos'); 
     }

    public function getUpdate($recurso_id)
    {
      $recurso = Recurso::find($recurso_id);

      if (is_null($recurso))
      {
       	return Redirect::to('recursos');
      }
    
     return View::make('recurso.update')->with('recurso',$recurso);

    }

	public function postUpdate($recurso_id)
	{
                    
    $rules = array(
      'tipo'           => 'Min:1|Max:4',
    //'descripcion'    => 'Between:4,8',
      'estado'         => 'Integer|Between:0,1', 
      'encargado'      => 'Exists:tbl_usuarios,id_usuario'
      );

    $validator = Validator::make(Input::all(),$rules); 
   
    if($validator->passes())
  {  

		$recurso = Recurso::find($recurso_id);

		if(is_null($recurso))
		{
		  return Redirect::to('recursos');
		}

    if (Input::has('tipo'))
    {
		$recurso->tipo = Input::get('tipo');
    }

    if (Input::has('descripcion'))
    {
		$recurso->descripcion  = Input::get('descripcion');
    }

    if (Input::has('encargado'))
    {
    $recurso->id_encargado = Input::get('encargado');
    }

		if (Input::has('estado'))
		{
			$recurso->estado = Input::get('estado');
		}

		$recurso->save();

		return Redirect::to('recursos');  
   }else{
   
     return Redirect::back()
    ->withErrors($validator)
    ->withInput();              
      
         }   


	}
}