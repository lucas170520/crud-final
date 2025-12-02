<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Adicionar Instrumento</h1>

    <form action="{{ route('instrumentos.store') }}" method="POST">
        @csrf

        <label for="nome">Nome do instrumento</label>
        <input type="text" name="nome" id="nome">

        <label for="tipo">Tipo do instrumento</label>
        <input type="text" name="tipo" id="tipo">

        <input type="submit" value="Cadastrar">
    </form>

    <a href="{{ route('instrumentos.index') }}">Voltar</a>
</body>
</html>