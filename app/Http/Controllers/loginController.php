<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(){
    
        $credenciales = request()->only('email', 'password');
            
            if(Auth::attempt($credenciales)){
                request()->session()->regenerate();
                return redirect()->route('inicio');
            }
            
            else{
                return view('login');
            }
    }



    public function salir(){
        Auth::logout();
        return redirect()->route('inicio');        
    }
}
