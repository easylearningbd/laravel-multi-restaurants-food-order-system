<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function ClientLogin(){
        return view('client.client_login');
   }
   // End Method 

   public function ClientRegister(){
    return view('client.client_register');
}
// End Method 


}
