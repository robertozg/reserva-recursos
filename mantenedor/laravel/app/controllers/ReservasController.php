<?php

class ReservasController extends \BaseController {

   public function __construct() // no deja acceder a nada de UserController sin estar autentificado
   {  
    $this->beforeFilter('auth'); 
   }

	public function getIndex() 
    {
       $reservas = Reserva::all(); // crear variable users, User::all -> pedimos que devuelva todos los usuarios de la tabla users

       return View::make('reserva.index')->with('reservas',$reservas); // ruta de la vista , ->with ... nombre de la variable en la view y el valor de la variable
    }
  
    public function getFormulario($recurso_id)  // mandar el usuario no se como :B
    {
   //   $usuario = User::find($usuario_id);
      $recurso = Recurso::find($recurso_id);
      //$users = User::all();
      if (is_null($recurso))
      {
    	    return View::make('recurso.index');
      };
       return View::make('reserva.formulario')->with('recurso',$recurso);
        
    }  

   public function postFormulario()
  {
     // Validación  

    $rules = array(
      'Nombre'         => 'Required|Min:3|Max:50',
      'id'             => 'Required|Unique:RECURSOS,ID_Recurso|Integer',
      'tipo'           => 'Required|Integer|Between:1,4',
      'caracteristica' => 'Required',
      'encargado'      => 'Required|exists:USUARIOS,RUT',
      'estado'         => 'Required|Integer|Between:0,1', 
      );

    $validator = Validator::make(Input::all(),$rules); 
   
    if($validator->passes())
  { 
      $reserva = new Recurso;

      $reserva->ID_Recurso = Input::get('id');
      $reserva->Tipo = Input::get('tipo');
      $reserva->Caracteristicas = Input::get('caracteristica');
      $reserva->Encargado = Input::get('encargado');
      $reserva->Estado = Input::get('estado');
      $reserva->save();

      return Redirect::to('reservas');
     
  }else{   
      return Redirect::back()->withErrors($validator)->withInput();
       }   
  }
}