@extends('layouts.app')

@section('titulo', 'crear curso')

@section('contenido')
    <br>
    <h3>Crear un nuevo curso</h3>
    <form action="/cursodbs" method="post">
      @csrf
      <div class="mb-3">
      <label for="nombre" class="form-label">Nombre del Curso</label>
      <input type="text" class="form-control" id="nombre" name="nombre">

    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion del Curso</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>

    <button type="submit" class="btn btn-dark">Guardar</button>
  </form>

@endsection