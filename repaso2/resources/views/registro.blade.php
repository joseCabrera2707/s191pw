@extends('layouts.plantilla')

@section('titulo','Registro')
@section('contenido')'

@vite(['resources\css\registro.css'])

<div class="formulario-container container mt-5">
    <h2>Registro de libros</h2>
    <form>
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" required>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" required>
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="number" class="form-control" name="paginas" required>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="number" class="form-control" name="anio" required>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="editorial" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email de Editorial</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

@endsection