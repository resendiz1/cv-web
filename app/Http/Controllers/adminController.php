<?php

namespace App\Http\Controllers;

use App\Models\Icono;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $iconos = Icono::all();
        $proyecto = Proyecto::all();

        return view('admin', compact('iconos', 'proyecto'));
    }

    public function delete(){

    
        Icono::destroy(request('id'));  
         return redirect()->route('skills')->with('delete', 'El icono fue Detruido');

      
       
    }
}
