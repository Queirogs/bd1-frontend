<?php 

include 'db.php';

$id_empregado = $_POST['id_empregado'];
$nome_empregado = $_POST['nome_empregado'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];


$query = "UPDATE EMPREGADOS SET nome_empregado='$nome_empregado', cpf='$cpf', email='$email' WHERE id_empregado = $id_empregado";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=empregados');
