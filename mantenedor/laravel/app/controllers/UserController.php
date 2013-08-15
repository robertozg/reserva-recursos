<?php

// GET POST PUT DELETE


class UserController extends BaseController 
{    
    public function __construct() // no deja acceder a nada de UserController sin estar autentificado
   {  
        $this->beforeFilter('auth'); 
   }  

    public function getIndex() 
    {
       $users = User::all(); // crear variable users, User::all -> pedimos que devuelva todos los usuarios de la tabla users

       return View::make('users.index')->with('users',$users); // ruta de la vista , ->with ... nombre de la variable en la view y el valor de la variable

    }

    public function getFormulario()
    {
    	return View::make('users.formulario'); // directorio de la vista
    }

   public function postFormulario()
{
     // Validación 

    $rules = array(  
      'nombre'                => 'Required|Min:3|Max:50',
      'rut'                   => 'Required|Integer|unique:tbl_usuarios,id_usuario', // unique:TABLA,COLUMNA
      'password'              => 'Required|Between:4,8|Confirmed',
      'password_confirmation' => 'Required|Between:4,8', // |AlphaNum
      'perfil'                => 'Required|Integer|Between:1,4', 
      'email'                 => 'Required|Between:3,64|Email|unique:tbl_usuarios,email',
      'fono'                  => 'Required|Integer|Unique:tbl_usuarios,fono'
    );

    $validator = Validator::make(Input::all(),$rules); 
   
    if($validator->passes())
   {
      $user = new User;

      $user->nombre_user = Input::get('nombre');
      $user->id_usuario = Input::get('rut');
      $user->password = Input::get('password');
      $user->perfil = Input::get('perfil');
      $user->email = Input::get('email');
      $user->fono = Input::get('fono'); 
      
      $user->save();

     return Redirect::to('usuarios');

    }else{
            return Redirect::back()->withErrors($validator)->withInput();
         }        
}

    public function getDelete($user_id)
    {     
      $user= User::find($user_id);

      if(is_null($user))
      {
      	return Redirect::to('usuarios'); 
      }   	

      $user->delete();

      return Redirect::to('usuarios'); 
     }

    public function getUpdate($user_id)
    {
      $user = User::find($user_id);

      if (is_null($user))
      {
       	return Redirect::to('usuarios');
      }
    
     return View::make('users.update')->with('user',$user); // ruta de la vista  carpeta.archivo.blade.php

    }

	public function postUpdate($user_id)
	{
  
    $rules = array(   // falta el telefono
      'Nombre'                => 'Min:3|Max:50',
      'password'              => 'Between:4,8',
      'perfil'                => 'Integer|Between:1,4', 
      'email'                 => 'Between:3,64|Email|unique:tbl_usuarios,email',
      'fono'                  => 'Integer|Unique:tbl_usuarios,fono'
      );

    $validator = Validator::make(Input::all(),$rules); 
   
    if($validator->passes())
  { 

		$user = User::find($user_id);

		if(is_null($user))
		{
		  return Redirect::to('usuarios');
		}
    if (Input::has('nombre'))
    {
     $user->nombre_user = Input::get('nombre');
    }

    if (Input::has('email'))
    {
     $user->email = Input::get('email');
    }

    if (Input::has('perfil'))
    {
     $user->perfil = Input::get('perfil');
    }
		if (Input::has('password'))
		{

      $user->password = Input::get('password');
		}
    if (Input::has('fono'))
    {
       $user->fono = Input::get('fono');
    }

		$user->save();

		return Redirect::to('usuarios');
  }else{
   
     return Redirect::back()
    ->withErrors($validator)
    ->withInput();          
          }  
	}
} 