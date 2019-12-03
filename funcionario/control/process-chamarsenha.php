<?php
//Includes
include('../../DbSource/connection.php');

//Iniciando session
session_start();

//Recuperando valores
$valueBocaoChamar = $_POST['btn-chamar'];

//SQL buscar
$query = "SELECT * FROM tb_senha WHERE id_senha LIKE '$valueBocaoChamar'";

//Executando query de busca
$res = mysqli_query($conn, $query);

if(mysqli_num_rows($res)){//Se tiver registros com esse id
    $dado = mysqli_fetch_array($res);
    $_SESSION['idSenha'] = $dado['id_senha'];
    $_SESSION['senhaDaVez'] = $dado['nome_user'];
    header('Location: ../sistema.php');
    exit;
}else{
    header('Location: ../sistema.php');
    exit;
}



?>