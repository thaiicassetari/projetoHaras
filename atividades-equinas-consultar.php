<h1>Consultar Atividades Equinas</h1> 
<?php 
	$sql = "SELECT * FROM passeios  AS pa INNER JOIN clientes AS cl ON pa.clientes_id_clientes = cl.id_clientes INNER JOIN cavalo AS ca ON pa.cavalo_id_cavalo = ca.id_cavalo ORDER BY nome_clientes";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	
	if ($qtd > 0) {
		print "<strong><p>Encontrou <strong>$qtd</strong> resultado(s)</p></strong>";

		print "<table style='text-align:center;' class='table table-dark table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Id</th>";
		print "<th>Cliente</th>";
		print "<th>Cavalo</th>";
		print "<th>Modalidade</th>";
		print "<th>Agendamento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_passeios."</td>";
		    print "<td>".$row->nome_clientes."</td>";
			print "<td>".$row->nome_cavalo."</td>";
			print "<td>".$row->tipo_passeios."</td>";
			print "<td>".$row->data_passeios."</td>";
			print "<td>
					<button class='btn btn-outline-success' onclick=\"location.href='?page=atividades-equinas-editar&id_passeios=".$row->id_passeios."';\">Editar</button><h>

					<button class='btn btn-outline-danger' onclick=\"if(confirm('Quer mesmo deletar??')){location.href='?page=atividades-equinas-salvar&acao=excluir&id_passeios=".$row->id_passeios."';}else{false;}\">Deletar</button>
			</td>";
			print "</tr>";
		};
		print "</table>";
	} else {
		print "<div class='alert alert-danger'>Nenhum dado encontrado!!</div>";
	}
	
?> 