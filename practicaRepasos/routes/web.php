<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
/* 
Route::get('/', function () {
    return view('inicio');
});
 */

 /* Rutas para el controlador */
 Route::get('/',[ControladorVista::class,'home'])->name('rutainicio');
 Route::get('/repaso1',[ControladorVista::class,'vistaconvertidor'])->name('repaso1');