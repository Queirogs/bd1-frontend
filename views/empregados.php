<div class="container" style="margin-top: 50px;">
	<a class="btn btn-dark" id="botao" href="?pagina=registrar_empregado" style="float: left; position: relative;">Contratar empregado</a>
	<br>

	<table class="table table-hover table-striped" id="empregados">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>CPF</th>
				<th>Email</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($linha = mysqli_fetch_array($consulta_empregados)){
					echo '<tr><td >'.$linha['id_empregado'].'</td>';
					echo '<td>'.$linha['nome_empregado'].'</td>';
					echo '<td>'.$linha['cpf'].'</td>';
					echo '<td>'.$linha['email'].'</td>';
				?>
					<td><a href="?pagina=registrar_empregado&editar=<?php echo $linha['id_empregado']; ?>">Editar</a></td>
					<td><a href="deleta_empregado.php?id_empregado=<?php echo $linha['id_empregado']; ?>">Demitir</a></td></tr>
			<?php
				}
			?>
		</tbody>

	</table>

</div>