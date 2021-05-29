<h1>Cadastrar Cavalos</h1>
<form action="?page=cavalos-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label><em><strong>Haras:</em></strong></label>
		<?php
		$sql = "SELECT * FROM haras";
		$res = $conn->query($sql) or die($conn->error);
		$qtd = $res->num_rows;


		if ($qtd > 0) {
			print "<select name='haras_id_Haras' class='form-control'>";
			print "<option>&#10147 Selecione </option>";
			while ($row = $res->fetch_object()) {
				print "<option value='" . $row->id_Haras . "'>" . $row->nome_Haras . "</option>";
			}
			print "</select>";
		} else {
			print "<div class='alert alert-danger'>Nenhum dado encontrado!</div>";
		}

		?>
	</div>
	<div class="form-group">
		<label><em><strong>Nome do Cavalo</em></strong></label>
		<input type="text" name="nome_cavalo" class="form-control">
	</div>
	<div class="form-group">
		<label><em><strong>Espécie do Cavalo</em></strong></label>
		<select name="especie_cavalo" class="form-control">
			<option>&#10146 Selecione </option>
			<option>Brasileiro de Hipismo</option>
			<option>Pampa</option>
			<option>Puro-sangue inglês</option>
			<option>Quarto de milha</option>
			<option>Andaluz</option>
			<option>Belga</option>
			<option>Hanoveriano</option>
		</select>
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>