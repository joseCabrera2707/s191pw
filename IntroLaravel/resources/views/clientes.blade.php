@extends('layouts.plantilla1') 
@section('titulo',' Clientes]')
  @section('contenido')


<div class="container mt-5 col-md-8">

@foreach($consultaClientes as $clientes)


<div class="card text-justify font-monospace mt-3">
    <div class="card-header fs-5 text-primary">
        {{$clientes->nombre}}
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> {{$clientes->correo}}</h5>
        <h5 class="fw-medium">{{$clientes->telefono}}</h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar')}} </button>
        <button type="submit" class="btn btn-danger btn-sm"> {{__('Eliminar')}} </button>
    </div>

</div>
@endforeach
</div>
@endsection