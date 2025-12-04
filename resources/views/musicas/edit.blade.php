<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar dados</h1>

    <form action="{{ route('musicas.update', $musica->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="titulo">Nome do musica:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $musica->titulo }}">

        <label for="compositor">Compositor:</label>
        <input type="text" name="compositor" id="compositor" value="{{ $musica->compositor }}">

        <input type="submit" value="Atualizar">
    </form>

    <a href="{{ route('musicas.index') }}">Voltar</a>
</body>
</html>