<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\datosController;
use App\Http\Controllers\iconoController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\mensajesController;
use App\Http\Controllers\proyectosControlller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Ruta que me lleva a los datos generales que voy a editar RUTAS DE LOS DATOS GFENERALES

Route::get('/', [datosController::class, 'index'])->name('inicio'); //Tengo dos rutas que se llaman igual
Route::get('/agregar', [datosController::class, 'create'])->name('datos.create');
Route::post('/agregar',[datosController::class, 'store'])->name('datos.store');
Route::get('/edit/{datos}', [datosController::class, 'update'])->name('datos.update');
Route::patch('/edit/{datos}', [datosController::class, 'edit'])->name('datos.edit');



//Rutas que controlas el CRUD de los proyectos
Route::get('/',[proyectosControlller::class, 'index'])->name('inicio'); //Tengo dos rutas que se llaman igual 
Route::get('/nuevoProyecto', [proyectosControlller::class, 'create'])->name('proyecto.create');
Route::get('/editar_proyecto/{proyecto}/', [proyectosControlller::class, 'update'])->name('proyectos.update');
Route::patch('editar_proyecto/{proyecto}/', [proyectosControlller::class, 'edit'])->name('proyecto.edit');
Route::post('/eliminando_proyecto/{id}', [proyectosControlller::class, 'delete'])->name('proyectos.delete');
Route::post('/proyecto_agregar', [proyectosControlller::class, 'store'])->name('proyecto.store');


//Rutas que controlan el CRUD(nomas agrega y borra) de las habilidades
Route::post('/eliminar_habilidades/{id}', [skillController::class, 'delete'])->name('habilidades.delete');
Route::get('/habilidades', [skillController::class, 'create'])->name('habilidades.create');
Route::post('/habilidades_crear', [skillController::class, 'store'])->name('habilidades.store');



//Rutas de los iconos
Route::get('/iconos_crear', [iconoController::class, 'create'])->name('iconos.create');
Route::post('/iconos_crear', [iconoController::class, 'store'])->name('iconos.store');



//Rutas de los mensajes
Route::post('/messages', [mensajesController::class, 'store'])->name('mensaje.store');
Route::get('/messages', [mensajesController::class, 'index'])->name('mensajes.index');


// Route::get('/', function () {
//     return view('inicio');
// })->name('inicio');



//RUTAS DEL DATOS CONTROLLER    



// Route::get('/skills', [iconoController::class, 'index'])->name('skills');


// Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
// Route::post('/admin', [adminController::class, 'delete'])->name(('icono.destroy'));
// Route::post('/admin/proyecto', [proyectosControlller::class, 'delete'])->name('proyecto.delete');
// Route::get('/admin/{proyecto}/editar', [proyectosControlller::class, 'edit'] )->name('proyecto.edit');






