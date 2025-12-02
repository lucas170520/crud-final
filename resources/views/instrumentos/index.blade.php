<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanfarra</title>
</head>
<body>
    <h1>Instrumentos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instrumentos as $instrumento)
                <tr>
                    <td>{{ $instrumento->nome }}</td>
                    <td>{{ $instrumento->tipo }}</td>
                    <td>
                        <a href="{{ route('instrumentos.edit', $instrumento->id) }}">Editar</a> |
                        <form action="{{ route('instrumentos.destroy', $instrumento->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Excluir">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>
        <a href="{{ route('instrumentos.create') }}">Cadastrar novo instrumento</a>
    </p>
</body>
</html>