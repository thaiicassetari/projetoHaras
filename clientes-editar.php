<h1>Editar Clientes</h1>
<?php
	$sql_principal = "SELECT * FROM clientes WHERE id_clientes = ".$_REQUEST["id_clientes"];
	$res_principal = $conn->query($sql_principal) or die($conn->error);
	$row_principal = $res_principal->fetch_object();
?>

<form action="?page=clientes-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_clientes" value="<?php print $_REQUEST["id_clientes"]; ?>">
	<div class="form-group">
		<label>Funcionario:</label>
		<?php 
			$sql = "SELECT * FROM funcionario";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			
			if ($qtd > 0) {
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option>&#10146 Selecione </option>";
				while ($row = $res->fetch_object()) {
				  if ($row_principal->funcionario_id_funcionario == $row->id_funcionario) {
				  	print "<option selected value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
				  }else{
				  	print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
				  }
			
				}
				print "</select>";

			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
			
		?>
	</div>
	<div class="form-group">
		<label>Nome do cliente:</label>
		<input type="text" name="nome_clientes" value="<?php print $row_principal->nome_clientes; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>Telefone:</em></strong></label>
		<input type="text" name="fone_clientes" value="<?php print $row_principal->fone_clientes; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>CPF:</em></strong></label>
		<input type="text" name="cpf_clientes" value="<?php print $row_principal->cpf_clientes; ?>" class="form-control">
	</div> 
	<div class="form-group">
		<label><em><strong>Data de Nascimento:</em></strong></label>
		<input type="date" name="dt_nascimento_clientes" value="<?php print $row_principal->dt_nascimento_clientes; ?>" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>