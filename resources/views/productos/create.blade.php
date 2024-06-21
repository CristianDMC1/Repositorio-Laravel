@extends('layouts.app')

@section('titulo', 'crear producto')

@section('contenido')
    <br>
    <h3>Crear un nuevo producto</h3>
    <form action="{{route('productos.store')}}" method="post">
      @csrf
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    <div class="mb-3">
        <label for="marca" class="form-label">Marca del Producto</label>
        <input type="text" class="form-control" id="marca" name="marca">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion del Producto</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio del Producto</label>
        <input type="text" class="form-control" id="precio" name="precio">
    </div>

    <div class="mb-3">
        <label for="cantidad" class="form-label">Cantidad del Producto</label>
        <input type="text" class="form-control" id="cantidad" name="cantidad">
    </div>

    <button type="submit" class="btn btn-dark">Guardar</button>
  </form>

  @if(session('success'))
  <div class="alert alert-success" id="success-message">
      {{ session('success') }}
  </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            let successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); // El mensaje desaparecerá después de 3 segundos (5000 milisegundos)
    });
</script>

@endsection
