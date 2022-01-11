<?php 

include 'db.php';

$id_empregado = $_GET['id_empregado'];

$query = "DELETE FROM EMPREGADOS WHERE id_empregado = $id_empregado";

mysqli_query($conexao, $query);

header('location:index.php?pagina=empregados');
