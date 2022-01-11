<?php 

include 'db.php';

$nome_ferramenta = $_POST['nome_ferramenta'];
$descricao = $_POST['descricao'];

$query = "INSERT INTO FERRAMENTAS(nome_ferramenta, descricao) VALUES('$nome_ferramenta', '$descricao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=ferramentas');
