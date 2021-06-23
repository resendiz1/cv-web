<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\Request;

class datosController extends Controller
{

    public function create(){
        return view('datos_add');
    }

    
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

    //Retornando la vista con los datos correspondientes a editar
    public function update(Dato $datos){
        return view('datos_edit', compact('datos'));
    }



    public function edit(Dato $datos){
        
    
        
         request()->validate([
            'nombre' => 'required',
            'titulo' => 'required',
            'ubicacion' => 'required',
            'nacimiento' => 'required',
            'estado_civil' => 'required',
            'objetivo' =>'required'            
        ]);

        

        if(request('imagen')){
            
             $imagen = request('imagen')->store('public');
            
             $datos->update([
                 'nombre' => request('nombre'),
                 'titulo' =>request('titulo'),
                 'ubicacion' =>request('ubicacion'),
                 'lugar_nacimiento' => request('nacimiento'),
                 'estado_civil' => request('estado_civil'),
                 'objetivo' => request('objetivo'),
                 'imagen' => $imagen
             ]);

             return redirect()->route('inicio')->with('updated', 'Los datos fueron actualizados');
        }

        else{
            $datos->update([
                'nombre' => request('nombre'),
                'titulo' =>request('titulo'),
                'ubicacion' =>request('ubicacion'),
                'lugar_nacimiento' => request('nacimiento'),
                'estado_civil' => request('estado_civil'),
                'objetivo' => request('objetivo')
            ]);

            return redirect()->route('inicio')->with('updated', 'Los datos fueron actualizados');
        }
    }


}
