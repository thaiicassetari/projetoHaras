<h1>Editar Funcionário</h1>
<?php
	$sql_principal = "SELECT * FROM funcionario WHERE id_funcionario = ".$_REQUEST["id_funcionario"];
	$res_principal = $conn->query($sql_principal) or die($conn->error);
	$row_principal = $res_principal->fetch_object();
?>

<form action="?page=funcionario-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_funcionario" value="<?php print $_REQUEST["id_funcionario"]; ?>">
	<div class="form-group">
		<label>Haras:</label>
		<?php 
			$sql = "SELECT * FROM haras";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			
			if ($qtd > 0) {
				print "<select name='haras_id_Haras' class='form-control'>";
				print "<option>&#10146 Selecione </option>";
				while ($row = $res->fetch_object()) {
				  if ($row_principal->haras_id_Haras == $row->id_Haras) {
				  	print "<option selected value='".$row->id_Haras."'>".$row->nome_Haras."</option>";
				  }else{
				  	print "<option value='".$row->id_Haras."'>".$row->nome_Haras."</option>";
				  }
			
				}
				print "</select>";

			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
			
		?>
	</div>
	<div class="form-group">
		<label>Nome do funcionário:</label>
		<input type="text" name="nome_funcionario" value="<?php print $row_principal->nome_funcionario; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="cargo_funcionario">Cargo:</label>
		<select name="cargo_funcionario" id="cargo_funcionario" class="form-control">
			<option value="veterinario" <?=$row_principal->cargo_funcionario == "veterinario" ? "selected": null ?>>Veterinário</option>
			<option value="administrador" <?=$row_principal->cargo_funcionario == "administrador" ? "selected": null ?>>administrador</option>
			<option value="atendente" <?=$row_principal->cargo_funcionario == "atendente" ? "selected": null ?>>atendente</option>
			<option value="tratador" <?=$row_principal->cargo_funcionario == "tratador" ? "selected": null ?>>tratador</option>
			<option value="casqueador" <?=$row_principal->cargo_funcionario == "casqueador" ? "selected": null ?>>casqueador</option>
			<option value="treinador" <?=$row_principal->cargo_funcionario == "treinador" ? "selected": null ?>>treinador</option>
		</select> 
	</div>
	<div class="form-group">
		<label for="area_funcionario">Área de trabalho:</label>
		<select name="area_funcionario" id="area_funcionario" class="form-control">
			<option value="administração" <?=$row_principal->area_funcionario == "administração" ? "selected": null ?>>Administração</option>
			<option value="picadeiro" <?=$row_principal->area_funcionario == "picadeiro" ? "selected": null ?>>Picadeiro</option>
			<option value="baias" <?=$row_principal->area_funcionario == "baias" ? "selected": null ?>>Baias</option>
			<option value="centro hípico" <?=$row_principal->area_funcionario == "centro hípico" ? "selected": null ?>>Centro hípico</option>
		</select>
	</div> 
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>