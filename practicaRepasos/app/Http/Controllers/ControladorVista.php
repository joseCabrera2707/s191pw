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

    public function generarconversion(Request $peticion){
    $valores = $peticion->all();

    $opcion = $valores['conversor'];
    $cant1 = floatval($valores['cant1']); 
    $resultado = 0;
    $mensaje = "";

    if ($opcion == "1") {
        $resultado = $cant1 / 1024; 
        $mensaje = "Resultado = $resultado TB";
    } elseif ($opcion == "2") {
        $resultado = $cant1 * 1024; 
        $mensaje = "Resultado = $resultado MB";
    } elseif ($opcion == "3") {
        $resultado = $cant1 / 1024; 
        $mensaje = "Resultado = $resultado TB";
    } elseif ($opcion == "4") {
        $resultado = $cant1 * 1024; 
        $mensaje = "Resultado = $resultado GB";
    }

    return $mensaje;
    }
}
