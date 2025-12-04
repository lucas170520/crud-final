<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanfarra</title>
</head>
<body>
    <h1>Ensaios</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Local</th>
                <th>Data</th>
                <th>Horário</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ensaios as $ensaio)
                <tr>
                    <td>{{ $ensaio->local }}</td>
                    <td>{{ $ensaio->data }}</td>
                    <td>{{ $ensaio->horario }}</td>
                    <td>
                        <a href="{{ route('ensaios.edit', $ensaio->id) }}">Editar</a> |
                        <form action="{{ route('ensaios.destroy', $ensaio->id) }}" method="POST" style="display:inline">
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
        <a href="{{ route('ensaios.create') }}">Cadastrar novo ensaio</a>
    </p>
</body>
</html>