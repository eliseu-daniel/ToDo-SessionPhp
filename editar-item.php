<?php
 $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="content">
        <form action="editar-item-sessao.php?id=<?= $id ?>" method="post">
            <input type="text" name="itens" placeholder="Alterar Item">
            <button class="adicionar">Salvar</button>
        </form>
    </div>
</body>
</html>
