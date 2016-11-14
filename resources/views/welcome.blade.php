@extends("template")

@section("content")
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <h1><a href="{{route("cliente.novo")}}">Novo Cliente</a></h1>
                <h1><a href="{{route("cliente.listar")}}">Listar Cliente</a></h1>
            </div>
        </div>
@stop