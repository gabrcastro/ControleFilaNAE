<?php

//Variaveis para realizar conexao
$hostname = "localhost";
$username = "gabriel";
$password = "";
$database = "db_nae";

//Metodo que realiza a conexao atribuindo a variavel $conn
$conn = mysqli_connect($hostname, $username, $password, $database);

//Verificando se não houve conexao
if(!$conn){//Se nao houver emitirá um alerta
    echo "<script>alert('Nao conectou');</script>";
}

?>