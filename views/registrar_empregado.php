<?php if(!isset($_GET['editar'])){ ?>

<div class="container" style="margin-top: 50px;">
	<h1>Contratar novo empregado</h1>
	<form method="post" action="registrar_empregado.php">
		<br>
		<label class="badge badge-secondary">Nome completo do	 empregado:</label><br>
		<input class="form-control" type="text" name="nome_empregado" placeholder="Insira o nome do empregado">
		<br><br>
		<label class="badge badge-secondary">CPF:</label><br>
		<input class="form-control" type="text" name="cpf" placeholder="CPF"><br><br>
		<label class="badge badge-secondary">EMAIL:</label><br>
		<input class="form-control" type="text" name="email" placeholder="email"><br><br>
		
		<input type="submit" class="btn btn-success" value="Inserir empregado">
	</form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_empregados)){ ?>
		<?php if($linha['id_empregado'] == $_GET['editar']){ ?>
			<h1>Editar empregado</h1>
				<form method="post" action="edita_empregado.php">
					<input type="hidden" name="id_empregado" value="<?php echo $linha['id_empregado']; ?>">
					<br>
					<label class="badge badge-secondary">Nome empregado:</label><br>
					<input class="form-control" type="text" name="nome_empregado" placeholder="Insira o nome do empregado" value="<?php echo $linha['nome_empregado']; ?>">
					<br><br>
					<label class="badge badge-secondary">CPF:</label><br>
					<input class="form-control"  type="text" name="cpf" placeholder="Insira o CPF" value="<?php echo $linha['cpf']; ?>"><br><br>
					<label class="badge badge-secondary">EMAIL:</label><br>
					<input class="form-control"  type="text" name="email" placeholder="Email" value="<?php echo $linha['email']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Editar empregado">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>