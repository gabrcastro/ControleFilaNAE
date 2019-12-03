<?php

include('../../DbSource/connection.php');

session_start();
$setor = $_SESSION['setor'];

$sql = "DELETE FROM tb_senha WHERE setor_func = '$setor'";

$res = mysqli_query($conn, $sql);

header('Location: ../sistema.php');
exit;

?>