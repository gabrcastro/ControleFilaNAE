<?php

include('../../DbSource/connection.php');
session_start();

$user = $_POST['user'];
$passwd = $_POST['passwd'];

$query = "SELECT * FROM tb_nae WHERE user = '".$user."' AND passwd = '".$passwd."'";

$result = mysqli_query($conn, $query);

while($dados = mysqli_fetch_array($result)){
     $_SESSION['nome'] = $dados['nome']; 
}


if(!$result){
    echo "<script>alert('Erro ao consultar');</script>";
}else{
    header('Location: ../escolher_mesa.php');
}

?>