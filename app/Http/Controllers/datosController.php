<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class datosController extends Controller
{
    public function store(){

     

     
       

        request()->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'ubicacion' => 'required',
            'nacimiento' => 'required',
            'estado_civil' => 'required',
            'objetivo' =>'required',
            'genero' => 'required',
            'imagen' => 'required'
        ]);

        $imagen = request('imagen')->store('public');

   

        Dato::create([
            'nombre' => request('nombre'),
            'titulo' =>request('titulo'),
            'ubicacion' =>request('ubicacion'),
            'lugar_nacimiento' => request('nacimiento'),
            'estado_civil' => request('estado_civil'),
            'objetivo' => request('objetivo'),
            'imagen' => $imagen

        ]);

        

        return redirect()->route('inicio')->with('datos', 'Datos agregados correctamente');
    }
}
