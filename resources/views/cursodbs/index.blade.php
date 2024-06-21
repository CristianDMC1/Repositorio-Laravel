@extends('layouts.app')

@section('titulo', 'Listado de Cursos')


@section('contenido')

<br>
<h3 class="text-center">Listado de Cursos Disponibles</h3>
<br>


<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($course as $cursito)
    <div class="col-sm"> {{--abrimos columna--}}
        <div class="card" style="width: 18rem;" >
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body"  style= "background-color: #c63a3a;">
              <h5 class="card-title">{{$cursito->nombre}}</h5>
              <p class="card-text">{{$cursito->descripcion}}</p>
              <a href="#" class="btn btn-dark">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div> {{--cierro el div row--}}

@endsection
