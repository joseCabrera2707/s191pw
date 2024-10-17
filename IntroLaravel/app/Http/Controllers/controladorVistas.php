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
        //respuesta a la petición 
        
        /* return $peticion->path();
        return $peticion->ip();
        return $peticion->url(); */
        return $peticion->all();
    }
}

