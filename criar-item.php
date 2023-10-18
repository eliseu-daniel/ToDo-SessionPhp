<?php

require_once('session.php');

$iten = $_POST['itens'];

criarItem($iten);

//print_r($item);

header('Location: /');

?>