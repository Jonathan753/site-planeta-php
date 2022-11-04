<?php
require 'conexao.php'; 

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$tamanho = $_POST['tamanho'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO planetas (nome, tipo, tamanho, descricao) VALUE ('$nome', '$tipo', '$tamanho', '$descricao')";

mysqli_query($conexao, $sql) or die ("Erro: " . mysqli_error($conexao));
header('Location: planetas.listar.php');
?>