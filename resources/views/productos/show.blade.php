@extends('layouts.app')

@section('titulo', 'Detalles del productos')


@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($course->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$course->descripcion}}</p>
    </div>
    <br>
    <a href=" /productos/{{$course->id}}/edit" class="btn btn-Dark">Editar Producto</a>





@endsection
