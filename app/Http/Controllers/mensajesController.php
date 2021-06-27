<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class mensajesController extends Controller
{

    public function store(){

            request()->validate([
                'nombre' => 'required',
                'mensaje' => 'required',
                'correo' => 'required|email'
            ]);


        Mensaje::create([
            'nombre' => request('nombre'),
            'mensaje' =>request('mensaje'),
            'correo' =>request('correo')
        ]);

        return redirect()->route('inicio')->with('status', 'Mensaje enviado');
    }


    
    public function index(){
        $mensajes = Mensaje::all();
        return view('mensajes', compact('mensajes'));
    }
}
