<?php

namespace App\Http\Controllers;

use App\Models\Icono;
use App\Models\Mensaje;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class iconoController extends Controller
{
    public function store(){

        request()->validate([
            'icono' => 'required',
            'nombre' => 'required'
        ]);
       
        Icono::create([
            'nombre' => request('nombre'),
            'icono' => request('icono')
        ]);

    
        return redirect()->route('skills')->with('icono', 'Icono agregado');
    }

    public function index(){

        $iconos =Icono::all();
        $proyecto = Proyecto::all();
        $mensajes = Mensaje::all();

       return view('agregar-skills', compact('iconos', 'proyecto', 'mensajes'));
    }
}
