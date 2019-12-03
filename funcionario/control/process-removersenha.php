<?php

//Pega url com o valor passado
$url = $_SERVER[REQUEST_URI];

//Corta a partit da ? e logo depois remove a ? sobrando apenas o valor que será usado
$val = strstr($url, "?");
$val = str_replace("?", "", $val);

//-------------------------------------------------------------------------------------
//Removendo do banco de dados

include('../../DbSource/connection.php');

$query = "DELETE FROM tb_senha WHERE id_senha LIKE $val";

$res = mysqli_query($conn, $query);

if($res){
    header('Location: ../sistema.php');
    exit;
}else{
    echo "Erro :: Chame o técnico e volte a página";
}

?>