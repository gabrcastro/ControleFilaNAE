<?php

session_start();

$btn = $_POST['btn'];

if($btn == 1){
    $_SESSION['prioridade'] = "PRIORIDADE";
}else{
    $_SESSION['prioridade'] = "";
}

header('Location: ../capturar-dados.php');

?>