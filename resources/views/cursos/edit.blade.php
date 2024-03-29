@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Aquí podras editar un curso</h1>

        <form action="{{route('cursos.update', $curso)}} " method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group my-4">
                <label for="title" class="form-label">Nombre del curso</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Ingrese nombre del artículo" value="{{old('title', $curso->title)}}">
            </div>

            @error('title')
            <p><strong>*{{ $message }}</strong></p>
            @enderror

            <div class="form-group my-4">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{old('description', $curso->description)}}</textarea>
            </div>

            @error('description')
            <p><strong>*{{ $message }}</strong></p>
            @enderror

            <div class="form-group my-4">
                <label for="categoria" class="form-label">Categoría</label>
                <input type="text" name="categoria" class="form-control" id="categoria" value="{{ old('categoria') }}" placeholder="Ingrese categoría del curso">
            </div>

            @error('categoria')
            <p><strong>*{{ $message }}</strong></p>
            @enderror

            <div class="form-group my-4">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>

            <div class="form-group my-4">
                <label for="img" class="form-label">Imagen actual</label>
                <img src="{{$curso->img}}" class="w-25" alt="Curso">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
