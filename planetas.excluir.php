<?php
require 'conexao.php';
$id = $_GET['teste'];
//echo $id;
$sql = "DELETE FROM planetas WHERE id = '$id'";
mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));
header('Location: planetas.listar.php');
exit();
?>