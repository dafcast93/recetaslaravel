@extends('layouts.app')

@section('botones')
    <a href="{{ route('recetas.create')}}" class="btn btn-primary px-4">Crear</a>
@endsection


@section('content')    
<h2 class="text-center mb-3">Administra tus recetas</h2>

<div class="col-md-10 mx-auto bg-white p-3">

    <table class="table">
        <thead class="bg-primary text-light">
            <tr>
                <th scole="col">Titulo</th>
                <th scole="col">Categoria</th>
                <th scole="col">Acciones</th>
            </tr>
                
        </thead>
        <tbody>
            @foreach($recetas as $receta)    
                <tr>
                    <td>{{$receta->titulo}}</td>
                    <td>{{ $receta->categoria->nombre}}</td>
                    <td>
                        <a href="" class="btn btn-danger">Eliminar</a>
                        <a href="" class="btn btn-dark">Editar</a>
                        <a href="" class="btn btn-success">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection