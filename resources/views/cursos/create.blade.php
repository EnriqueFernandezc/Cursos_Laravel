@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Aquí podras crear un curso</h1>

                {{-- en action se le indica la ruta que recibira los datos de este formulario --}}
        {{-- los datos se pueden enviar a la vista store con el metodo get o post, 
        con get los datos se envian por la url, con post se envian de manera oculta a traves del body del http request,
        por seguridad la informacion de un formulario se debe enviar con el metodo post --}}

        <form action="{{route('cursos.store')}} " method="post" enctype="multipart/form-data">
            {{-- cuando se usa el metodo post se debe usar csrf el cual 
            agrega un input oculto llamado token y genera un token --}}

            @csrf

            <div class="form-group my-4">
                <label for="title" class="form-label">Nombre del curso</label>
                {{-- el metodo old recuerda el contenido que se introdujo en el input name  --}}

                <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese nombre del artículo" value="{{ old('title') }}">
            </div>

            {{-- error verifica si hay un error de validacion del campo name imprime un mensaje de error --}}
            @error('title')
                <br>
                <small>*{{ $message }} </small>
                <br>
            @enderror

            <div class="form-group my-4">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
            </div>

            @error('description')
                <br>
                <small>*{{ $message }}</small>
                <br>
            @enderror

            <div class="form-group my-4">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" name="categoria" class="form-control" id="categoria" value="{{ old('categoria') }}" placeholder="Ingrese categoría del curso">
            </div>

            @error('categoria')
                <br>
                <p><strong>{{ $message }}</strong></p>
                {{-- <small>*{{ $message }}</small> --}}
                <br>
            @enderror

            <div class="form-group my-4">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
