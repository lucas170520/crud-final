<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<body>
    <h1>Editar</h1>

    <form action="{{ route('eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome do eventos:</label>
        <input type="text" name="nome" id="nome" value="{{ $evento->nome }}">

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $evento->descricao }}">

        <label for="local">Local:</label>
        <input type="text" name="local" id="local" value="{{ $evento->local }}">

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="{{ $evento->data }}">

        <label for="horario">Horário:</label>
        <input type="time" name="horario" id="horario" value="{{ \Carbon\Carbon::parse($evento->horario)->format('H:i') }}">

        <input type="submit" value="Atualizar">
    </form>

    <a href="{{ route('eventos.index') }}">Voltar</a>
</body>
</html>