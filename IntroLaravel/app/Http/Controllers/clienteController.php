<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function home(){
        return view('inicio');
    }

    public function index()
    {
        $consultaClientes = DB::table('cliente')->get();
        return view('clientes',compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //aqui va la vista donde voy a abrir mi formulario
        return view('formulario');
    }

    /**
     * Aqui preparamos el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
         //redirección enviando msj en session
         $usuario = $request->input('txtnombre');
         session()->flash('exito','se editó el usuario: '.$usuario);
 
         return to_route('rutacacas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consultaClientes = DB::table('cliente')->where('id', $id)->first();
        //Mostramos el formulario para editar y mandamos los resultados de la consulta
        return view('formularioeditar',compact('consultaClientes'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidadorCliente $request, string $id)
    {
        //
        $consultaCliente = DB::table('cliente')
        ->where('id', $id)
        ->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');
        session()->flash('exito','se editó el usuario: '.$usuario);
        return to_route('rutaconsulta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, string $nombre)
    {
        //
        $consultaCliente = DB::table('cliente')
            ->where('id',$id)
            ->delete();

        session()->flash('delete','Se eliminó el usuario '.$nombre);
        return to_route('rutaconsulta');
    }
}
