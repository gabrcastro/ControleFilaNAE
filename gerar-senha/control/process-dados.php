<?php

//Incluindo conexao com o banco
include('../../DbSource/connection.php');

//Iniciando sessao
session_start();

//Capturando o nome e setor selecionado pelo usuario
$nome = $_SESSION['input-nome'];
$setor = $_SESSION['btn-setor'];

//Capturando prioridade
$prioridade = $_SESSION['prioridade'];

//ISQL que vai inserir no banco esses dados para depois ser chamado
$sql = "INSERT INTO tb_senha VALUES(null, '$nome', '$setor', '$prioridade', 0)";

//Executando SQL
$result = mysqli_query($conn, $sql);

//Redurecionando a tela de confirmacao
header('Location: ../gif-acompanhe.php');

?>