@extends('layouts.plantilla1') 

  @section('titulo','Formulario Clientes')
  @section('contenido')

<div class="container mt-5 col-md-6">
{{--@dump($id) --}}


@if(session('exito'))
<x-alert tipo="success">{{session('exito')}}</x-alert>
@endif



<div class="card font-monospace">
  <div class="card-header fs-5 text-center text-primary">
     {{__('Editar Clientes')}}
 </div>
 <div class="card-body text-justify">
  <form method="POST" action="{{route('rutaupdate',$consultaClientes->id)}}">
      @csrf
      @method('PUT')
      <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="txtnombre" id="nombre" class="form-control" value="{{ $consultaClientes->nombre }}" >
            <small class='text-danger fst-italic'> {{ $errors->first('txtnombre' )}}</small>
    </div>
    <div class="mb-3">
        <label for="Apellido" class="form-label">{{__('Apellido:')}}</label>
        <input type="text" class="form-control" name="txtapellido" value="{{ $consultaClientes->apellido }}">
        <small class='text-danger fst-italic'> {{ $errors->first('txtapellido' )}}</small>
    </div>
    <div class="mb-3">
        <label for="correo" class="form-label">{{__('Correo:')}}</label>
        <input type="text" class="form-control" name="txtcorreo" value="{{ $consultaClientes->correo }}">
        <small class='text-danger fst-italic'> {{ $errors->first('txtcorreo' )}}</small>
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">{{__('Telefono:')}} </label>
        <input type="text" class="form-control" name="txttelefono" value="{{ $consultaClientes->telefono }}">
        <small class='text-danger fst-italic'> {{ $errors->first('txttelefono' )}}</small>
    </div>
    

    <div class="card-footer text-muted">
      <div class="d-grid gap-2 mt-2 mb-1">
        <button type="submit" class="btn btn-success btn-sm"> {{__('Editar Cliente')}}</button>
      </div>
  </form>
  </div>
</div>
</div>


@endsection