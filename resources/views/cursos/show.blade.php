@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- la variable curso se recibe desde el metodo show de CursoController, con todos los datos del registro --}}
        <h1>Bienvenido al curso {{$curso->title}}</h1>
        <a href="{{route('cursos.index')}}" class="btn btn-primary">Volver a cursos</a>
        <br>

        <div class="row d-flex justify-content-center">

            {{-- card de bootstrap para mostrar los juguetes en menu catalogo --}}
            <div class="card my-4 text-center" style="width: 18rem;">
                <img class="card-img-top p-4" src="{{ $curso->img }} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $curso->title }} </h5>
                    <p class="card-text"><strong>ID: </strong>{{$curso->id}} </p>
                    <p class="card-text"><strong>Categoria: </strong>{{$curso->categoria}}</p>
                    <p class="card-text">{{ $curso->description }} </p>

                    @auth
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('cursos.edit', $curso) }}" class="btn btn-primary">Editar</a>

                            <form action="{{ route('cursos.destroy', $curso) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>
@endsection
