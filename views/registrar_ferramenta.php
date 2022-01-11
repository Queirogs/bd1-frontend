<?php if(!isset($_GET['editar'])){ ?>

<div class="container" style="margin-top: 50px;">
	<h1>Inserir nova ferramenta</h1>
	<form method="post" action="registrar_ferramenta.php">
		<br>
		<label class="badge badge-secondary">Nome ferramenta:</label><br>
		<input class="form-control" type="text" name="nome_ferramenta" placeholder="Insira o nome da ferramenta">
		<br><br>
		<label class="badge badge-secondary">Descrição</label><br>
		<input class="form-control"  type="text" name="descricao" placeholder="Insira a descrição"><br><br>
		<input type="submit" class="btn btn-success" value="Inserir ferramenta">
	</form>
</div>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_ferramentas)){ ?>
		<?php if($linha['id_ferramenta'] == $_GET['editar']){ ?>

			<h1>Editar curso</h1>
			<form method="post" action="edita_ferramenta.php">
				<input type="hidden" name="id_ferramenta" value="<?php echo $linha['id_ferramenta']; ?>">
				<br>
				<label class="badge badge-secondary">Nome ferramenta:</label><br>
				<input class="form-control" type="text" name="nome_ferramenta" placeholder="Insira o nome da ferramenta" value="<?php echo $linha['nome_ferramenta']; ?>">
				<br><br>
				<label class="badge badge-secondary">Descrição</label><br>
				<input class="form-control" type="text" name="descricao" placeholder="Insira a descrição"  value="<?php echo $linha['descricao']; ?>"><br><br>
				<input class="btn btn-success" type="submit" value="Editar curso">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
