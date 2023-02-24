@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center h2">{{ __('Bienvenido a nuestro sitio web de cursos') }}</div>

                    {{-- Insertar logo y centrar --}}
                    <div class="card-body d-flex justify-content-center">

                        <img src="{{ asset('/img/logo.png') }}" alt="Logo" class="w-50">

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

    {{-- parrafos --}}

    <div class="container border border-1 my-5">
        <div class="row d-flex justify-content-around text-center my-5">
            <div class="col-4">
                <h2>Lorem ipsum dolor</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque veritatis sed, suscipit illo
                    voluptatibus adipisci cupiditate, ut voluptatum exercitationem praesentium ipsam iste corporis deserunt
                    reprehenderit! Enim eveniet quo recusandae.</p>
                <img src="/img/js.png" alt="" style="width: 50%">
            </div>
            <div class="col-4">
                <h2>Lorem ipsum dolor</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque veritatis sed, suscipit illo
                    voluptatibus adipisci cupiditate, ut voluptatum exercitationem praesentium ipsam iste corporis deserunt
                    reprehenderit! Enim eveniet quo recusandae.</p>
                <img src="/img/js.png" alt="" style="width: 50%">
            </div>            
        </div>

        <div class="row d-flex justify-content-around text-center my-5">
            <div class="col-4">
                <h2>Lorem ipsum dolor</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque veritatis sed, suscipit illo
                    voluptatibus adipisci cupiditate, ut voluptatum exercitationem praesentium ipsam iste corporis deserunt
                    reprehenderit! Enim eveniet quo recusandae.</p>
                    <img src="/img/php.png" alt="" style="width: 50%">
            </div>
            <div class="col-4">
                <h2>Lorem ipsum dolor</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque veritatis sed, suscipit illo
                    voluptatibus adipisci cupiditate, ut voluptatum exercitationem praesentium ipsam iste corporis deserunt
                    reprehenderit! Enim eveniet quo recusandae.</p>
                <img src="/img/php.png" alt="" style="width: 50%">
            </div>
        </div>
    </div>
@endsection
