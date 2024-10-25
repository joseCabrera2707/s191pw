<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){

        $validacion = $peticion->validate([ 
            'txtnombre'=>'required|min:3|max:20',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email',
            'txttelefono'=>'required|numeric',
        ]);

        //redirección enviando msj en session
        $usuario = $peticion->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }
}

