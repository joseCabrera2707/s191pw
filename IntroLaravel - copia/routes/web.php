<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


/*rutas para ttrabajar con el controladorvistas*/
Route::get('/',[controladorVistas::class,'home'])->name('rutainicio');
/* Route::get('/form',[controladorVistas::class,'insert'])->name('rutacacas'); */
Route::get('/consultar',[controladorVistas::class,'select'])->name('rutaconsulta');
Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente'])->name('rutaenviar');


/*Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::view('/','inicio')->name('rutainicio');

Route::view('/form','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

Route::view('/component','componentes')->name('rutacomponent');

/* Rutas para trabajr con el controlador clienteController ----------------------------------------------------------------------------------*/

Route::get('/cliente/create',[clienteController::class,'create'])->name('rutacacas');
