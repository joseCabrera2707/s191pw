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
        $libro = $peticion->input('titulo');
        session()->flash('exito', 'Todo correcto. Libro: ' . $libro . ' guardado');
        return to_route('rutaregistro');
    }
}
