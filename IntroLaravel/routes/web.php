<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;


/*rutas para ttrabajar con el controladorvistas*/
/* Route::get('/',[controladorVistas::class,'home'])->name('rutainicio'); */
/* Route::get('/form',[controladorVistas::class,'insert'])->name('rutacacas'); */
/* Route::get('/consultar',[controladorVistas::class,'select'])->name('rutaconsulta'); */
/* Route::post('/enviarCliente',[controladorVistas::class,'procesarCliente'])->name('rutaenviar'); */


/*Route::get('/', function () {
    return view('welcome');
});
*/

/* Route::view('/','inicio')->name('rutainicio');

Route::view('/form','formulario')->name('rutacacas');

Route::view('/consultar','clientes')->name('rutaconsulta'); */

Route::view('/component','componentes')->name('rutacomponent');

/* Rutas para trabajr con el controlador clienteController ----------------------------------------------------------------------------------*/
Route::get('/',[clienteController::class,'home'])->name('rutainicio');
Route::get('/cliente/create',[clienteController::class,'create'])->name('rutacacas');
Route::post('/cliente',[clienteController::class,'store'])->name('rutaenvia');

Route::get('/consultar',[clienteController::class,'index'])->name('rutaconsulta');
Route::get('/cliente/{id}/update',[clienteController::class,'edit'])->name('rutaeditar');