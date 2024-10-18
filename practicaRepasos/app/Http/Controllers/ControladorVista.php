<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function vistaconvertidor(){
        return view('repaso1');
    }
}
