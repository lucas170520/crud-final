<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanfarra</title>
</head>
<body>
    <h1>Eventos</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Local</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->nome }}</td>
                    <td>{{ $evento->descricao }}</td>
                    <td>{{ $evento->local }}</td>
                    <td>{{ $evento->data }}</td>
                    <td>{{ $evento->horario }}</td>
                    <td>
                        <a href="{{ route('eventos.edit', $evento->id) }}">Editar</a> |
                        <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST" style="display:inline">
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
        <a href="{{ route('eventos.create') }}">Cadastrar novo evento</a>
    </p>
</body>
</html>