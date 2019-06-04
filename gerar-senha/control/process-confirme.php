<?php

//Iniciando sessao
session_start();
//Capturando nome digitado
$_SESSION['input-nome'] = $_POST['input-nome'];
//Redirecionando para outra página
header('Location: ../confirme.php');

?>