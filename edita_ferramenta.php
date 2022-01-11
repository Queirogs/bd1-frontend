<?php 

include 'db.php';

$id_ferramenta = $_POST['id_ferramenta'];
$nome_ferramenta = $_POST['nome_ferramenta'];
$descricao = $_POST['descricao'];


$query = "UPDATE CURSOS SET id_ferramenta='$id_ferramenta', nome_ferramenta = '$nome_ferramenta', descricao = '$descricao' WHERE id_ferramenta = $id_ferramenta";

mysqli_query($conexao, $query);

header('location:index.php?pagina=ferramentas');
