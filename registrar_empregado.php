<?php 

include 'db.php';

$nome_empregado = $_POST['nome_empregado'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];

$query = "INSERT INTO EMPREGADOS(nome_empregado, cpf, email) VALUES('$nome_empregado', '$cpf','$email')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=empregados');
