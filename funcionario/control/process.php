<?php

//Inserido a o arquivo responsavel por conectar ao banco de dados
include('../../DbSource/connection.php');

//Iniciadndo sessao para poder trabalhar com os dados
session_start();

//Capturando o usuario e senha digitados no login
$user = $_POST['user'];
$passwd = $_POST['passwd'];

//comando sql responsavel por capturar os dados do funcionario logando
$query = "SELECT * FROM tb_nae WHERE user_func LIKE '$user' AND passwd_func LIKE '$passwd'";

//Executando o comando sql
$result = mysqli_query($conn, $query);


if(mysqli_num_rows($result)){//Se tiver algum registro
    $row = mysqli_fetch_array($result); //Captura os dados em forma de array

    $_SESSION['nome'] = $row['nome_func'];//Inicia uma sessao com o nome daquele funcionario que realizou login
    header('Location: ../escolher_mesa.php');//Redireciona para a escolha_mesa.php
    exit;
}else{//Se nao tiver registro
    $_SESSION['erro-login'] = 1; //Inicia uma sessao com erro-login passando valor 1 para fazer verificacao e exibir alerta
    header('Location: ../../index.html');//Redireciona para index.html
    exit;
}

?>