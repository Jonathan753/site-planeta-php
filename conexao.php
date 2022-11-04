<?php 
$servename = "localhost";
$username = "root";
$password = "";
$database = "universo";

$conexao = mysqli_connect($servename, $username, $password, $database);

if (mysqli_connect_errno()){
    printf("<p style = 'color = red';> Conexão falhou: %s\n</p>", mysqli_connect_error());
    exit();
}
?>