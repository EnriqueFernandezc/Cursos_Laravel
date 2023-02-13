@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Bienvenido a la pagina de cursos</h1>

        {{-- solo los usuarios autenticados pueden agregar articulos --}}
        @auth
        <div class="mt-4">
            <a href="{{route('cursos.create')}}" class="btn btn-primary">Crear curso</a>
        </div>
        @endauth

        {{-- hacer listado de cursos con foreach para mostrarlos en el sitio web 
    cuando se haga clic en menu catalogos --}}

        {{-- $cursos es el objeto que contiene todos los registros de bd recuperados por
    el metodo index del controlador y enviado a esta vista, foreach recorre el objeto $toys
    y cada registro enconytrado se almacena en $toy para luego mostrarlo --}}

        <div class="row d-flex justify-content-between">

            {{-- @foreach ($collection as $item) --}}
            {{-- $toys=objeto recibido del controlador; $toy=es cada registro del objeto --}}

            @foreach ($cursos as $curso)
                {{-- card de bootstrap para mostrar los juguetes en menu catalogo --}}
                <div class="card my-4 text-center" style="width: 18rem;">
                    <img class="card-img-top p-4" src="{{ $curso->img }} " alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $curso->title }} </h5>
                        <p class="card-text">{{ $curso->description }} </p>
                        <p class="card-text">Categoría: {{ $curso->categoria }} </p>

                        {{-- poner un p con el precio y agregar la columna precio en bd --}}

                        <a href="{{ route('cursos.show', $curso) }} " class="btn btn-primary">Mas información</a>
                    </div>
                </div>
            @endforeach
        </div>
        
        {{-- si existe una variable de sesion 'info' se genera un alerta con el mensaje de session 'with('info', 'Mensaje enviado')' del metodo store de ContactController --}}
        @if (session('info'))
            <script>
                alert(" {{ session('info') }}");
            </script>
        @endif

    </div>
@endsection
