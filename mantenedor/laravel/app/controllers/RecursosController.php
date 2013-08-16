<?php

class RecursosController extends \BaseController {

   public function __construct() // no deja acceder a nada de UserController sin estar autentificado
   {  
    $this->beforeFilter('auth'); 
   }



   
         }   
	   


   