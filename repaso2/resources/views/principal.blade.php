@extends('layouts.plantilla')

@section('titulo', 'Principal')
@section('contenido')

@vite(['resources/css/principal.css']) 
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title text-center">{{__('Lanzamiento de la Nueva Novela de Gabriel García Márquez')}}</h5>
            <img src="{{ asset('images/Gabriel-Garcia-Marquez.webp') }}" class="card-img-top img-fluid" alt="Gabriel García Márquez">
            <p class="card-text mt-3">
                {{__('La aclamada escritora Isabel Allende anunció el lanzamiento de su nuevo libro, *El viento conoce mi nombre*, que se publicará el próximo mes. Este relato promete llevar a los lectores a un viaje emocional a través de la vida de sus personajes.')}}
            </p>
        </div>
    </div>
</div>

@endsection
