<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

Route::get('/',[ControladorVista::class,'Principal'])->name('rutaprincipal');
Route::get('/registro',[ControladorVista::class,'RegistroLibros'])->name('rutaregistro');

