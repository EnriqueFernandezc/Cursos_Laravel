@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido a nuestro sitio web de cursos') }}</div>

                {{-- Insertar logo y centrar --}}
                <div class="card-body d-flex justify-content-center">

                    <img src="{{ asset('/img/logo.png')}}" alt="Logo" class="w-50">

                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
