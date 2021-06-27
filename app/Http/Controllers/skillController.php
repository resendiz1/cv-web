<?php

namespace App\Http\Controllers;

use App\Models\Icono;
use App\Models\Skill;
use Illuminate\Http\Request;

class skillController extends Controller
{
    public function store(){

        request()->validate([
            'nombre' => 'required',
            'color' => 'required'
        ]);

        Skill::create([
            'nombre' => request('nombre'),
            'color' => request('color'),
            'icono' => request('icono')
        ]);

        return redirect()->route('inicio')->with('status', 'skill agregado');
    }


    public function create(){
        
        $iconos = Icono::all();
        return view('habilidades', compact('iconos'));

    }


    public function index(){
        return  view('inicio', compact('skill'));
    }

    public function delete(Skill $id){
        
        $id->delete();

        return redirect()->route('inicio')->with('habilidad_borrada', 'La habilidad fue eliminada');
    }
}
