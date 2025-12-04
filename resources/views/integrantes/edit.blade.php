<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar dados</h1>

    <form action="{{ route('integrantes.update', $integrante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome do integrante:</label>
        <input type="text" name="nome" id="nome" value="{{ $integrante->nome }}">

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="{{ $integrante->telefone }}">

        <input type="submit" value="Atualizar">
    </form>

    <a href="{{ route('integrantes.index') }}">Voltar</a>
</body>
</html>