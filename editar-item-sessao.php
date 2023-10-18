<?php

require_once('session.php');

$id     = $_GET['id'];
$item = $_POST['itens'];

editarItem($id, $iten);

//print_r($item);

header('Location: /');

?>