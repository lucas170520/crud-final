<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadrastar Integrante</h1>

    <form action="{{ route('integrantes.store') }}" method="POST">
        @csrf

        <label for="nome">Nome do integrante:</label>
        <input type="text" name="nome" id="nome">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone">

        <input type="submit" value="Cadastrar">
    </form>

    <a href="{{ route('integrantes.index') }}">Voltar</a>
</body>
</html>