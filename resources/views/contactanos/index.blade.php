@extends('layouts.app')

{{-- @section('title', 'Contactanos') --}}

@section('content')

    <div class="container my-2">

        <h2>Escribenos</h2>

        <form action="{{ route('contactanos.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
    
            <div class="form-group my-4">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Escribe tu nombre">
            </div>
    
            @error('name')
                <p><strong>*{{ $message }}</strong></p>
            @enderror
    
            <div class="form-group my-4">
                <label for="email" class="form-label">Correo electronico</label>
                <input type="email" name="email" class="form-control" id="email"
                    placeholder="Escribe tu correo electronico">
            </div>
    
            @error('email')
                <p><strong>*{{ $message }}</strong></p>
            @enderror
    
            <div class="form-group my-4">
                <label for="description" class="form-label">Mensaje</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"
                    placeholder="Escribe tu mensaje"></textarea>
            </div>
    
            @error('description')
                <p><strong>*{{ $message }}</strong></p>
            @enderror
    
            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
        </form>
    </div>

    {{-- si existe una variable de sesion 'info' se genera un alerta con el mensaje de session 'with('info', 'Mensaje enviado')' del metodo store de ContactanosController --}}
    @if (session('info'))
        <script>
            alert("{{ session('info') }}");
        </script>
    @endif

@endsection
