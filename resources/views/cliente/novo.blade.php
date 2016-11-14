@extends("template")

@section("content")

    <form method="post" action="{{route("cliente.novo")}}">

        {{csrf_field()}}

        @if(isset($cliente))
            <input type="hidden" name="id" value="{{$cliente->id}}">
        @endif
        <div class="form-group">
            <label>
                Nome:
                <input type="text" name="nome" class="form-control" value="{{@$cliente->nome}}">
            </label>
        </div>

        <div class="form-group">
            <label>
                Cidade:
                <input type="text" name="cidade" class="form-control" value="{{@$cliente->cidade}}">
            </label>
        </div>
        <div class="form-group">
            <label>
                Estado:
                <input type="text" name="estado" class="form-control" value="{{@$cliente->estado}}">
            </label>
        </div>
        <div class="form-group">
            <label>
                Hobbies:
                <input type="text" name="hobbie" class="form-control" value="{{@$cliente->hobbie}}">
            </label>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="salvar">
        </div>
    </form>



@stop