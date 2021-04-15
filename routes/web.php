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

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


Route::view('/datos', 'add-datos')->name('datos');
Route::view('/skills', 'agregar-skills')->name('skills');

Route::post('/messages', [mensajesController::class, 'store'])->name('mensaje.store');
Route::post('/skills', [skillController::class, 'store'])->name('skill.store');
Route::post('/datos',[datosController::class, 'store'])->name('datos.store');
Route::post('/skills/proyectos', [proyectosControlller::class, 'store'])->name('proyecto.store');
Route::get('/',[proyectosControlller::class, 'index'])->name('inicio');
Route::post('/skills/icono', [iconoController::class, 'store'])->name('icono.store');
Route::get('/skills', [iconoController::class, 'index'])->name('skills');
Route::get('/admin', [adminController::class, 'index'])->name('admin.index');
Route::post('/admin', [adminController::class, 'delete'])->name(('icono.destroy'));
Route::post('/admin/proyecto', [proyectosControlller::class, 'delete'])->name('proyecto.delete');
Route::get('/admin/{proyecto}/editar', [proyectosControlller::class, 'edit'] )->name('proyecto.edit');
Route::patch('admin/{proyecto}/editar', [proyectosControlller::class, 'update'])->name('proyecto.update');
