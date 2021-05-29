<h1>Cadastrar Clientes</h1>
<form action="?page=clientes-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label><em><strong>Funcionario:</em></strong></label>
		<?php 
			$sql = "SELECT * FROM funcionario";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			
			if ($qtd > 0) {
				print "<select name='funcionario_id_funcionario' class='form-control'>";
				print "<option>&#10146 Selecione </option>";
				while ($row = $res->fetch_object()) {
				  print "<option value='".$row->id_funcionario."'>".$row->nome_funcionario."</option>";
			
				}
				print "</select>";

			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
			
		?>
	</div>
	<div class="form-group">
		<label><em><strong>Nome do cliente:</em></strong></label>
		<input type="text" name="nome_clientes" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>Telefone:</em></strong></label>
		<input type="text" name="fone_clientes" value="(00)00000-0000" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>CPF:</em></strong></label>
		<input type="text" name="cpf_clientes" value="00000000000" class="form-control">
	</div> 
	<div class="form-group">
		<label><em><strong>Data de Nascimento:</em></strong></label>
		<input type="date" name="dt_nascimento_clientes" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>