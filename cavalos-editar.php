<h1>Editar Cavalos</h1>
<?php
	$sql_principal = "SELECT * FROM cavalo WHERE id_cavalo =".$_REQUEST["id_cavalo"];
	$res_principal = $conn->query($sql_principal) or die($conn->error);
	$row_principal = $res_principal->fetch_object();
?>

<form action="?page=cavalos-salvar" method="POST">
	<input type="hidden" name="acao" value="editar"> <!--hidden=oculto -->
	<input type="hidden" name="id_cavalo" value="<?php print $_REQUEST["id_cavalo"]; ?>">
	<div class="form-group">
		<label><em><strong>Haras:</em></strong></label>
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
		<label><em><strong>Nome do Cavalo</em></strong></label>
		<input type="text" name="nome_cavalo"   value="<?php print $row_principal->nome_cavalo; ?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="especie_cavalo"><em><strong>Espécie do Cavalo</em></strong></label>
		<select name="especie_cavalo" id="especie_cavalo" class="form-control">
			<option value=">Brasileiro de hipismo" <?=$row_principal->especie_cavalo == "Brasileiro de Hipismo" ? "selected": null ?>>Brasileiro de Hipismo</option>
			<option value="Pampa" <?=$row_principal->especie_cavalo == "Pampa" ? "selected": null ?>>Pampa</option>
			<option value="Puro-sangue inglês" <?=$row_principal->especie_cavalo == "Puro-sangue inglês" ? "selected": null ?>>Puro-sangue inglês</option>
			<option value="Quarto de milha" <?=$row_principal->especie_cavalo == "Quarto de milha" ? "selected": null ?>>Quarto de milha</option>
			<option value="Andaluz" <?=$row_principal->especie_cavalo == "Andaluz" ? "selected": null ?>>Andaluz</option>
			<option value="Belga" <?=$row_principal->especie_cavalo == "Belga" ? "selected": null ?>>Belga</option>
			<option value="Hanoveriano" <?=$row_principal->especie_cavalo == "Hanoveriano" ? "selected": null ?>>Hanoveriano</option>
		</select>

	</div>

	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>