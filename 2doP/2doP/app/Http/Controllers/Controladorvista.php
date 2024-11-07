<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorform;

class Controladorvista extends Controller
{
    public function form(){
        return view('formUsuarios');
    }
    public function procesarformulario(validadorform $peticion){

        $correo = $peticion->input('correo');
        session()->flash('formulario','se ha guardado correctamente sus datos en el correo '.$correo);

        return to_route('rutaformulario');
    }
}
