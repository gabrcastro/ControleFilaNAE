<?php

session_start();

$setor = $_POST['select-setor'];
$mesa = $_POST['select-mesa'];

$_SESSION['setor'] = $setor;
$_SESSION['mesa'] = $mesa;

header('Location: ../sistema.php');

?>