<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorvista;


Route::get('/',[Controladorvista::class,'form'])->name('rutaformulario');
Route::post('/enviarformulario',[Controladorvista::class,'procesarformulario'])->name('formulario');
