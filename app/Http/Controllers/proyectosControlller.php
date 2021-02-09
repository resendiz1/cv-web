<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Icono;
use App\Models\Skill;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class proyectosControlller extends Controller
{
    public function store(){



            request()->validate([
                'titulo' => 'required',
                'youtube' => 'required',
                'git' => 'required',
                'descripcion' => 'required',
                'imagen1'=> 'required',
                'imagen2' => 'required',
                'imagen3' => 'required'

            ]);
            $img1 = request('imagen1')->store('public');
            $img2 = request('imagen2')->store('public');
            $img3 = request('imagen3')->store('public');

            Proyecto::create([
                'nombre' => request('titulo'),
                'descripcion' => request('descripcion'),
                'imagen1' => $img1,
                'imagen2' => $img2,
                'imagen3' => $img3,
                'url_git' => request('git'),
                'url_youtube' => request('youtube')

            ]);


        return redirect()->route('inicio')->with('add', 'Proyecto agregado');
    }


    public function index(){
       $proyectos = Proyecto::latest()->simplePaginate();
       $skill = Skill::latest()->simplePaginate(6);
       $datos = Dato::all();
       $last = $datos->last();
     
    

        return view('inicio', compact('proyectos', 'skill', 'last'));
    }



    public function delete(){

        Proyecto::destroy(request('id'));

        return redirect()->route('skills')->with('status', 'Proyecto '.request('id').' borrado');
    }


    public function edit(Proyecto $proyecto){

        return view('proyectoEdit', ['proyecto' => $proyecto]);
    }



    public function update(Proyecto $proyecto){


        $img1 = request('imagen1')->store('public');
        $img2 = request('imagen2')->store('public');
        $img3 = request('imagen3')->store('public');

        $proyecto -> update([
            'nombre' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen1' => $img1,
            'imagen2' => $img2,
            'imagen3' => $img3,
            'url_git' => request('git'),
            'url_youtube' => request('youtube')

        ]);


        return redirect()->route('inicio')->with('edit', '!Elemento editado!');
    }
}
