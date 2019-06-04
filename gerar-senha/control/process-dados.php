<?php

include('../../DbSource/connection.php');

session_start();

$nome = $_SESSION['input-nome'];
$setor = $_SESSION['btn-setor'];
$prioridade = $_SESSION['prioridade'];

$sql = "INSERT INTO tb_senha VALUES(null, '$nome', '$setor', '$prioridade')";

$result = mysqli_query($conn, $sql);

header('Location: ../gif-acompanhe.php');

?>