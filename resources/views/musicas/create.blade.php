<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadrastar música</h1>

    <form action="{{ route('musicas.store') }}" method="POST">
        @csrf

        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" id="titulo">

        <label for="compositor">Compositor:</label>
        <input type="text" name="compositor" id="compositor">

        <input type="submit" value="Cadastrar">
    </form>

    <a href="{{ route('musicas.index') }}">Voltar</a>
</body>
</html>