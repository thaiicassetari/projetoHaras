<h1>Editar Atividades Equinas</h1>
<?php
	$sql_principal = "SELECT * FROM passeios WHERE id_passeios =".$_REQUEST["id_passeios"];
	$res_principal = $conn->query($sql_principal) or die($conn->error);
	$row_principal = $res_principal->fetch_object();
?>
<form action="?page=atividades-equinas-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_passeios" value="<?php print $_REQUEST["id_passeios"]; ?>">
	<div class="form-group">
		<label><em><strong>Cliente</em></strong></label>
		<?php
			$sql = "SELECT * FROM clientes";
			$res = $conn->query($sql) or die($conn->error);
			$qtd = $res->num_rows;

			
			if ($qtd > 0) {
				print "<select name='clientes_id_clientes' class='form-control'>";
				print "<option>&#10146 Selecione </option>";
				while ($row = $res->fetch_object()) {
				  if ($row_principal->clientes_id_clientes == $row->id_clientes) {
				  	print "<option selected value='".$row->id_clientes."'>".$row->nome_clientes."</option>";
				  }else{
				  	print "<option value='".$row->id_clientes."'>".$row->nome_clientes."</option>";
				  }
			    }
				print "</select>";
  			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
		 ?>
	</div>

	<div class="form-group">
		<label><em><strong>Cavalo</em></strong></label>
		<?php
			$sql_1 = "SELECT * FROM cavalo";
			$res_1 = $conn->query($sql_1) or die($conn->error);
			$qtd_1 = $res_1->num_rows;

			
			if ($qtd_1 > 0) {
				print "<select name='cavalo_id_cavalo' class='form-control'>";
				print "<option>&#10146 Selecione </option>";
				while ($row_1 = $res_1->fetch_object()) {
				  if ($row_principal->cavalo_id_cavalo == $row_1->id_cavalo) {
				  	print "<option selected value='".$row_1->id_cavalo."'>".$row_1->nome_cavalo."</option>";
				  }else{
				  	print "<option value='".$row_1->id_cavalo."'>".$row_1->nome_cavalo."</option>";
				  }
			    }
				print "</select>";
  			} else {
				print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
			}
		 ?>
	</div>

	<div class="form-group">
		<label for="tipo_passeios"><em><strong>Modalidade</em></strong></label>
		<select name="tipo_passeios" id="tipo_passeios" class="form-control">
			<option value="equitação" <?=$row_principal->tipo_passeios == "equitação" ? "selected": null ?>>Equitação</option>
			<option value="corrida de cavalo" <?=$row_principal->tipo_passeios == "corrida de cavalo" ? "selected": null ?>>Corrida de cavalo</option>
			<option value="polo" <?=$row_principal->tipo_passeios == "polo" ? "selected": null ?>>Polo</option>
			<option value="volteio" <?=$row_principal->tipo_passeios == "volteio" ? "selected": null ?>>Volteio</option>
			<option value="hipismo" <?=$row_principal->tipo_passeios == "hipismo" ? "selected": null ?>>Hipismo</option>
		</select>
	</div>

	<div class="form-group">
		<label><em><strong>Data</em></strong></label>
		<input type="datetime-local" name="data_passeios" value="<?php print $row_principal->data_passeios; ?>" class="form-control">
	</div>

	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>

</form>
