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

<div class="container my-5 text-center">
    <h2>Lorem ipsum dolor</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia cumque veritatis sed, suscipit illo voluptatibus adipisci cupiditate, ut voluptatum exercitationem praesentium ipsam iste corporis deserunt reprehenderit! Enim eveniet quo recusandae.</p>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae animi laboriosam corporis totam libero explicabo esse, laborum perferendis porro eum culpa quaerat veniam molestiae quasi eos tenetur quisquam consequatur cum!</p>
</div>

<div class="container d-flex justify-content-between">
    <div>
        <img src="/img/html.png" alt="" class="img-fluid w-50 mx-auto">
    </div>
    <div>
        <img src="/img/html.png" alt="" class="img-fluid w-50 mx-auto">
    </div>
    <div>
        <img src="/img/html.png" alt="" class="img-fluid w-50 mx-auto">
    </div>
</div>


@endsection
