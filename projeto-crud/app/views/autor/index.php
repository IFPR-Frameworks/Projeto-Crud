<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!-- app/views/autor/index.php -->
    <h1>Lista de Autores</h1>
    <a href="/autores/create">Novo Autor</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($autores as $autor): ?>
            <tr>
                <td><?= $autor->getId(); ?></td>
                <td><?= $autor->getNome(); ?></td>
                <td>
                    <a href="/autores/edit?id=<?= $autor->getId(); ?>">Editar</a>
                    <a href="/autores/delete?id=<?= $autor->getId(); ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>


</body>

</html>