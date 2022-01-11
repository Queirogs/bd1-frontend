<?php 

include 'db.php';

$id_ferramenta = $_GET['id_ferramenta'];

$query = "DELETE FROM FERRAMENTAS WHERE id_ferramenta = $id_ferramenta";

mysqli_query($conexao, $query);

header('location:index.php?pagina=ferramentas');
