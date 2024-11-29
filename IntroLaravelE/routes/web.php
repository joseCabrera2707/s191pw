<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\controladorVistas;
use App\Http\Controllers\ClienteController;

Route::get('/',[ClienteController::class,'home'])->name('rutainicio');
Route::resource('cliente',ClienteController::class);
