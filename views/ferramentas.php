<div class="container" style="margin-top: 50px;">

	<a class="btn btn-dark" id="botao" href="?pagina=registrar_ferramenta">Reservar ferramenta</a>
	<br>
	<table class="table table-hover table-striped" id="ferramentas">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome ferramenta</th>
				<th>Descrição</th>
				<th>Editar</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				while($linha = mysqli_fetch_array($consulta_ferramentas)){
					echo '<tr><td>'.$linha['id_ferramenta'].'</td>';
					echo '<td>'.$linha['nome_ferramenta'].'</td>';
					echo '<td>'.$linha['descricao'].'</td>';
			?>
				<td><a href="?pagina=registrar_ferramenta&editar=<?php echo $linha['id_ferramenta']; ?>">Editar</a></td>
				<td><a href="deleta_ferramenta.php?id_ferramenta=<?php echo $linha['id_ferramenta']; ?>">Deletar</a></td></tr>

			<?php
				}
			?>
		</tbody>

	</table>

</div>
