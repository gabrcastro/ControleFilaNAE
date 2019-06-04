<?php

$hostname = "localhost";
$username = "gabriel";
$password = "";
$database = "db_nae";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn){
    echo "<script>alert('Nao conectou');</script>";
}

?>