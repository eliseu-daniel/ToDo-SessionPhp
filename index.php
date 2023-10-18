<?php
    include_once('session.php');

    $objeto = empty($_SESSION['itens']) ? [] : $_SESSION['itens'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="content">
        
        <form action="criar-item.php" method="post">
            <h1>TO DO Session</h1>
            <input type="text" name="itens" placeholder="Adicionar Item">
            <button class="adicionar">+</button>
            <ul>
                <?php 
                    foreach ($_SESSION['itens'] as $objeto) {
                ?>  
                    <li>
                        <?= $objeto['itens'] ?>
                        <a href="editar-item.php?id=<?= $objeto['id']?>" >editar</a>
                        <a href="excluir-item.php?id=<?= $objeto['id']?>" >excluir</a>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </form>
    </div>
</body>
</html>