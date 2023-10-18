<?php

require_once('session.php');

$id = $_GET['id'];

excluirItem($id);

//print_r($item);

header('Location: /');

?>