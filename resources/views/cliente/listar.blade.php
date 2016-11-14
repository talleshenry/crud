@extends("template")

@section("content")

    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Hobbies</th>
            <th>Editar</th>
            <th>Excluir</th>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->cidade}}</td>
                    <td>{{$cliente->estado}}</td>
                    <td>{{$cliente->hobbie}}</td>
                    <td>
                        <a href="{{route("cliente.editar", ["id" => $cliente->id ])}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route("cliente.excluir", ["id" => $cliente->id ])}}">Excluir</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

@stop