@extends('layouts.plantilla')

@section('titulo','Registro')
@section('contenido')'

@vite(['resources\css\registro.css'])

<div class="formulario-container container mt-5">
    <h2>Registro de libros</h2>
    <form method = "POST" action="/enviarlibro">
        @csrf
        <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" name="isbn" value="{{old('isbn')}}" required>
            <small class='text-warning fst-italic' >{{$errors->first('isbn')}}</small>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}" required>
            <small class='text-warning fst-italic' >{{$errors->first('titulo')}}</small>
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" name="autor" value="{{old('autor')}}" required>
            <small class='text-warning fst-italic' >{{$errors->first('autor')}}</small>
        </div>
        <div class="mb-3">
            <label for="paginas" class="form-label">Páginas</label>
            <input type="text" class="form-control" name="paginas" value="{{old('paginas')}}"  required>
            <small class='text-warning fst-italic' >{{$errors->first('paginas')}}</small>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año</label>
            <input type="text" class="form-control" name="anio" value="{{old('anio')}}" required>
            <small class='text-warning fst-italic' >{{$errors->first('anio')}}</small>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control" name="editorial" value="{{old('editorial')}}"  required>
            <small class='text-warning fst-italic' >{{$errors->first('editorial')}}</small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email de Editorial</label>
            <input type="text" class="form-control" name="email" value="{{old('email')}}" required>
            <small class='text-warning fst-italic' >{{$errors->first('email')}}</small>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </form>
</div>

@endsection