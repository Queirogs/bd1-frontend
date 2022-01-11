<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'empregados': include 'views/empregados.php'; break;
	case 'ferramentas': include 'views/ferramentas.php'; break;
	case 'registrar_empregado': include 'views/registrar_empregado.php'; break;
	case 'registrar_ferramenta': include 'views/registrar_ferramenta.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
