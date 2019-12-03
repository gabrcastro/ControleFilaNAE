<?php
//Iniciando sessao para utilizar o metodo SESSION para trabalhar com os dados nas paginas
session_start();

//Capturando setor e mesa escolhidos 
$setor = $_POST['select-setor'];
$mesa = $_POST['select-mesa'];

//Criando sessoes com esse setor e mesa para captura-los em outras paginas
$_SESSION['setor'] = $setor;
$_SESSION['mesa'] = $mesa;

//Redirecionando para sistema.php
header('Location: ../sistema.php');

?>