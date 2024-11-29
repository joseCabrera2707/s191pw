@extends('layouts.plantilla1') 
@section('titulo',' Clientes]')
  @section('contenido')


<div class="container mt-5 col-md-8">

<div class="card text-justify font-monospace">
    <div class="card-header fs-5 text-primary">
        Jose angel Martinez Cabrera
    </div>

    <div class="card-body">
        <h5 class="fw-bold"> josecab2003@gmail.com</h5>
        <h5 class="fw-medium"> 4423300114 </h5>
        <p class="card-text fw-lihgter"></p>
    </div>

    <div class="card-footer text-muted">
        <button type="submit" class="btn btn-warning btn-sm"> {{__('Actualizar')}} </button>
        <button type="submit" class="btn btn-danger btn-sm"> {{__('Eliminar')}} </button>
    </div>

</div>
</div>
@endsection