@extends('layouts.app')

@section('titulo', 'Editar Producto')


@section('contenido')

<br>

<h3 class="text-center">Editar información del Producto</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/productos/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreproducto">Modifique el Nombre del Producto</label>
        <input name="nombre" id="nombreproducto" value="{{$course->nombre}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="marcaproducto">Modifique la Marca del Producto</label>
        <input name="marca" id="marca" value="{{$course->marca}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="descripcionproducto">Modifique la Descripción del Producto</label>
        <input name="descripcion" id="descripcion" value="{{$course->descripcion}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="precioproducto">Modifique el precio del Producto</label>
        <input name="precio" id="precio" value="{{$course->precio}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="cantidadproducto">Modifique la Cantidad del Producto</label>
        <input name="cantidad" id="cantidad" value="{{$course->cantidad}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
