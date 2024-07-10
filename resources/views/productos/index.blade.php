@extends('layouts.app')

@section('titulo', 'Listado de Productos')


@section('contenido')

<br>
<h3 class="text-center">Listado de Productos Disponibles</h3>
<br>


<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($course as $cursito)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;" >
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body"  style= "background-color: #d7d1d1;">
              <h5 class="card-title">{{$cursito->nombre}}</h5>
              <p class="card-text">{{$cursito->marca}}</p>
              <p class="card-text">{{$cursito->descripcion}}</p>
              <p class="card-text">{{$cursito->precio}}</p>
              <p class="card-text">{{$cursito->cantidad}} unidades</p>
              <a href="/productos/{{$cursito->id}}" class="btn btn-dark">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
