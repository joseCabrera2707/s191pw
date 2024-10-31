<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;

class ControladorVista extends Controller
{
    //Aqui van las rutas de nuestro proyecto
    public function Principal(){
        return view('principal');
    }

    public function RegistroLibros(){
        return view('registro');
    }
    public function ProcesarLibro(validadorLibro $peticion){
        $usuario = $peticion->input('isbn');
        return to_route('rutacacas');
    }
}
