<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "projeto";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM EMPREGADOS";
$consulta_empregados = mysqli_query($conexao, $query);

$query = "SELECT * FROM FERRAMENTAS";
$consulta_ferramentas = mysqli_query($conexao, $query);

