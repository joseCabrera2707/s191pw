@extends('layouts.plantilla1') 
@section('titulo', 'Clientes')

@section('contenido')

<!--Mensaje de confirmacion de edicion -->
@session('exito')
<script>
  Swal.fire({
  title: "Respuesta del servidor",
  text:'{{$value}}',
  icon: "success"
  });

</script>
@endsession

<!-- Mostrar mensaje de éxito al eliminar -->
@if(session('delete'))
<script>
    Swal.fire({
        title: '¡Usuario Eliminado!',
        text: '{{ session('delete') }}',
        icon: 'success',
        timer: 3000,
        showConfirmButton: false
    });
</script>
@endif

<!-- Confirmación de eliminación -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmarEliminacion(id) {
        Swal.fire({
            title: '¿Estás seguro de eliminar?',
            text: "¡Esta acción no se puede deshacer!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                // Envía el formulario
                document.getElementById('form-eliminar-' + id).submit();
            }
        });
    }
</script>

<div class="container mt-5 col-md-8">

    @foreach($consultaClientes as $clientes)
    <div class="card text-justify font-monospace mt-3">
        <div class="card-header fs-5 text-primary">
            {{ $clientes->nombre }}
        </div>

        <div class="card-body">
            <h5 class="fw-bold">{{ $clientes->correo }}</h5>
            <h5 class="fw-medium">{{ $clientes->telefono }}</h5>
        </div>

        <div class="card-footer text-muted">
            <!-- Botón de Actualizar -->
            <a href="{{ route('rutaeditar', $clientes->id) }}" class="btn btn-warning btn-sm">Actualizar</a>

            <!-- Botón de Eliminar -->
            <form id="form-eliminar-{{ $clientes->id }}" method="POST" action="{{ route('rutaborrar', ['id' => $clientes->id, 'nombre' => $clientes->nombre]) }}" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion({{ $clientes->id }})">Eliminar</button>
            </form>

        </div>
    </div>
    @endforeach

</div>
@endsection
