<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>

    <form action="{{ route('ensaios.update', $ensaio->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="local">Local do ensaio:</label>
        <input type="text" name="local" id="local" value="{{ $ensaio->local }}">

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="{{ $ensaio->data }}">

        <label for="horario">Horário:</label>
        <input type="time" name="horario" id="horario" value="{{ $ensaio->horario }}">

        <input type="submit" value="Atualizar">
    </form>

    <a href="{{ route('ensaios.index') }}">Voltar</a>
</body>
</html>