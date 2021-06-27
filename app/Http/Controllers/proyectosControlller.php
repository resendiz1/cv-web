<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use App\Models\Icono;
use App\Models\Skill;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class proyectosControlller extends Controller
{

    public function create(){
        return view('proyectos_add');
    }



    public function store(){



            request()->validate([
                'titulo' => 'required',
                'url_youtube' => 'required',
                'url_git' => 'required',
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
                'url_git' => request('url_git'),
                'url_youtube' => request('url_youtube')

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



    public function delete($id){

        
        Proyecto::destroy($id);
        return redirect()->route('inicio')->with('proyecto_eliminado', 'El proyecto se elimino correctamente');
    }






    public function update(Proyecto $proyecto){

        return view('proyecto_edit', compact('proyecto'));
    }









    public function edit(Proyecto $proyecto){

        //Comprobando que los inputs de la img no vengan vbacios, si vinenen vacios pss se pone la direccion antigua
        //Se podria mejorar con un ciclo
        if(request('imagen1')){
            $img1 = request('imagen1')->store('public'); 
        } else {
            $img1 = $proyecto->imagen1;
        }
        
        if(request('imagen2')){
            $img2 = request('imagen2')->store('public');
        }else{
            $img2 = $proyecto->imagen2;
        }

        if(request('imagen3')){
            $img3 = request('imagen3')->store('public');
        }else{
            $img3 = $proyecto->imagen3;
        }
        //Termina la validacion de la imagenes  
        


        request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url_git' => 'required',
            'url_youtube' => 'required'
        ]);




        $proyecto -> update([
            'nombre' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen1' => $img1,
            'imagen2' => $img2,
            'imagen3' => $img3,
            'url_git' => request('url_git'),
            'url_youtube' => request('url_youtube')

        ]);


        return redirect()->route('inicio')->with('edit', '!Elemento editado!');
    }
}
