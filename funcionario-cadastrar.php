<h1>Cadastrar Funcionário</h1>
<form action="?page=funcionario-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label><em><strong>Haras:</em></strong></label>
		<?php 
			$sql = "SELECT * FROM haras";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			
			if ($qtd > 0) {
				print "<select name='Haras_id_Haras' class='form-control'>";
				print "<option>&#10147 Selecione </option>";
				while ($row = $res->fetch_object()) {
				  print "<option value='".$row->id_Haras."'>".$row->nome_Haras."</option>";
			
				}
				print "</select>";

			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
			
		?>
	</div>
	<div class="form-group">
		<label><em><strong>Nome do funcionrio:</em></strong></label>
		<input type="text" name="nome_funcionario" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>Cargo:</em></strong></label>
		<select name="cargo_funcionario" class="form-control">
			<option>&#10147 Selecione </option>
			<option value="veterinario">Veterinário</option>
			<option value="administrador">Administrador</option>
			<option value="atendente">Atendente</option>
			<option value="tratador">Tratador</option>
			<option value="casqueador">Casqueador</option>
			<option value="treinador">Treinador</option>
		</select>
	</div>
	<div class="form-group">
		<label><em><strong>Área de trabalho:</em></strong></label>
		<select name="area_funcionario" class="form-control">
			<option>&#10147 Selecione</option>
			<option value="administracao">Administração</option>
			<option value="picadeiro">Picadeiro</option>
			<option value="baias">Baias</option>
			<option value="centro-hipico">Centro hípico</option>
		</select>
	</div> 
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>