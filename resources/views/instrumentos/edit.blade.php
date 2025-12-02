<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar</h1>

    <form action="{{ route('instrumentos.update', $instrumento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome do instrumento</label>
        <input type="text" name="nome" id="nome" value="{{ $instrumento->nome }}">

        <label for="tipo">Tipo do instrumento</label>
        <input type="text" name="tipo" id="tipo" value="{{ $instrumento->tipo }}">

        <input type="submit" value="Atualizar">
    </form>

    <a href="{{ route('instrumentos.index') }}">Voltar</a>
</body>
</html>