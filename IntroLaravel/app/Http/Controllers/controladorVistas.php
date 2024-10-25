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
        
        
        // redirecion usando la ruta
        //return redirect('/');

        // redirecion usando el nombre de la ruta
        //return redirect()->route('rutaconsulta');

        //redirecciona al origen de la petición
        //return back();

        //Redirecciona con valores adjuntos (variables,arreglos etc ...)
      /*   $id= [['usuario'=>'1'],['usuario'=>'2']];
        return view('formulario',compact('id')); */

        //redirección enviando msj en session
        $usuario = $peticion->input('txtnombre');
        session()->flash('exito','se guardo el usuario: '.$usuario);

        return to_route('rutacacas');
    }
}

