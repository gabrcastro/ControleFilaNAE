<?php
session_start();

//Captura valor do botao
$btn = $_POST['btn'];

if($btn == 1){ //Se botao for 1
    $_SESSION['btn-setor'] = "NAE"; //Setor é NAE
}

if($btn == 2){ //Se botao for 2
    $_SESSION['btn-setor'] = "ProUni/FIES"; //Setor é PorUni/FIES
}

//Redireciona para prioridade.html
header('Location: ../prioridade.html');

?>