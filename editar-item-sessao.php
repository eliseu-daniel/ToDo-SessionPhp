<?php

require_once('session.php');

$id     = $_GET['id'];
$iten = $_POST['itens'];

editarItem($id, $iten);

//print_r($item);

header('Location: /');

?>