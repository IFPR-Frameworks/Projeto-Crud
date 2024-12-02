<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- app/views/autor/create.php -->
<h1>Novo Autor</h1>
<form action="/autores/store" method="post">
    <label>Nome: </label>
    <input type="text" name="nome">
    <button type="submit">Salvar</button>
</form>
<a href="/autores">Voltar</a>

    
</body>
</html>