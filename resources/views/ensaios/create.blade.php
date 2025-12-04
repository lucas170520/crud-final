<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar ensaio</h1>

    <form action="{{ route('ensaios.store') }}" method="POST">
        @csrf

        <label for="local">Local do ensaio:</label>
        <input type="text" name="local" id="local">

        <label for="data">Data:</label>
        <input type="date" name="data" id="data">

        <label for="horario">Horário:</label>
        <input type="time" name="horario" id="horario">

        <input type="submit" value="Cadastrar">
    </form>

    <a href="{{ route('ensaios.index') }}">Voltar</a>
</body>
</html>