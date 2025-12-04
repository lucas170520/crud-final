<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanfarra</title>
</head>
<body>
    <h1>Integrantes</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($integrantes as $integrante)
                <tr>
                    <td>{{ $integrante->nome }}</td>
                    <td>{{ $integrante->telefone }}</td>
                    <td>
                        <a href="{{ route('integrantes.edit', $integrante->id) }}">Editar</a> |
                        <form action="{{ route('integrantes.destroy', $integrante->id) }}" method="POST" style="display:inline">
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
        <a href="{{ route('integrantes.create') }}">Cadastrar novo integrante</a>
    </p>
</body>
</html>