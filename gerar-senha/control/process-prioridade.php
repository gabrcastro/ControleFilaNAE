<?php

//Iniciando sessao
session_start();

//Capturando valor do botao escolhido
$btn = $_POST['btn'];

if($btn == 1){ //Se for 1 a sessao recebe prioridade
    $_SESSION['prioridade'] = "PRIORIDADE";
}else{ //senao, recebe nada
    $_SESSION['prioridade'] = "";
}

//Redireciona para capturar_dados.php
header('Location: ../capturar-dados.php');

?>