<h1>Agendar Atividade Equinas</h1>
<form action="?page=atividades-equinas-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label><em><strong>Cliente</em></strong></label>
		<?php
			$sql = "SELECT * FROM clientes";
			$res = $conn->query($sql);
			print "<select name='clientes_id_clientes' class='form-control'>";
			print "<option>&#10146 Selecione </option>";
			while ($row = $res->fetch_object()) {
				print "<option value='".$row->id_clientes."' >".$row->nome_clientes."</option>";
			}
			print "</select>";
		 ?>
	</div>

	<div class="form-group">
		<label><em><strong>Cavalo</em></strong></label>
		<?php
			$sql_1 = "SELECT * FROM cavalo";
			$res_1 = $conn->query($sql_1);
			print "<select name='cavalo_id_cavalo' class='form-control'>";
			print "<option>&#10146 Selecione </option>";
			while ($row_1 = $res_1->fetch_object()) {
				print "<option value='".$row_1->id_cavalo."' >".$row_1->nome_cavalo."</option>";
			}
			print "</select>";
		 ?>
	</div>

	<div class="form-group">
		<label><em><strong>Modalidade</em></strong></label>
		<select name="tipo_passeios" class="form-control">
			<option>&#10146 Selecione </option>
			<option>Equitação</option>
			<option>Corrida de cavalo</option>
			<option>Polo</option>
			<option>Volteio</option>
			<option>Hipismo</option>
		</select>
	</div>

	<div class="form-group">
		<label><em><strong>Data</em></strong></label>
		<input type="datetime-local" name="data_passeios" class="form-control">
	</div>

	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>

</form>

	