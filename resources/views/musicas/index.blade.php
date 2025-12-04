<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanfarra</title>
</head>
<body>
    <h1>Músicas</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Compositor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($musicas as $musica)
                <tr>
                    <td>{{ $musica->titulo }}</td>
                    <td>{{ $musica->compositor }}</td>
                    <td>
                        <a href="{{ route('musicas.edit', $musica->id) }}">Editar</a> |
                        <form action="{{ route('musicas.destroy', $musica->id) }}" method="POST" style="display:inline">
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
        <a href="{{ route('musicas.create') }}">Cadastrar música</a>
    </p>
</body>
</html>