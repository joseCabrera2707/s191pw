<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    //Aqui van las rutas de nuestro proyecto
    public function Principal(){
        return view('principal');
    }

    public function RegistroLibros(){
        return view('registro');
    }


}
