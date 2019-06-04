<?php
session_start();

$btn = $_POST['btn'];

if($btn == 1){
    $_SESSION['btn-setor'] = "NAE";
}

if($btn == 2){
    $_SESSION['btn-setor'] = "ProUni/FIES";
}

header('Location: ../prioridade.html');

?>