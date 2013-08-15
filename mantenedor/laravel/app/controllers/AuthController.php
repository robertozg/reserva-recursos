<?php

class AuthController extends BaseController
{ 
   public function getIndex()  // getLogin 
	{ 
		return View::make('auth.login');
	}
    
   public function postIndex() //postLogin
 {       
      $rules = array(
      'rut'                   => 'Required|Integer',
      'password'              => 'Required'
      );

      $userdata= array(
      'id_usuario' => Input::get('rut'),   // RUT
      'password' => Input::get('password'));  

      $validator = Validator::make(Input::all(),$rules); 
    
        if($validator->passes())
       {              
              if(Auth::attempt($userdata)) 
            { 
              //   unset($userdata['RUT']);   

                  if (Auth::check())
                {
                  $user_RUT = Auth::user()->id_usuario;  

                  $user = DB::table('tbl_usuarios')  // USUARIOS
                   ->where('id_usuario','=',$user_RUT)  // RUT
                   ->first(array('perfil'));        // tipo

                 // Session::put('RUT',$user->RUT); // save user details into session

                     if($user->perfil==1) // si es de tipo 1 (administrador) ->tipo
                   { 
                        return View::make('admin.dashboard');
                   }else
                        {
                         // $recursos = Recurso::all(); 
                         // return View::make('recurso.index')->with('recursos',$recursos);
                          return Redirect::to('logout');
                        } 
                } 
              }else{    
   	               return Redirect::to('login')->with('login_errors',true);
                   }
         }else{
   	            return Redirect::to('login')->withErrors($validator)->withInput(); 
              }                                                                          
   } 

   public function getLogout()
   {
      Auth::logout(); // devuelven un objeto DUMP

      return Redirect::to('login');
   }  
 } 
