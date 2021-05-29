<h1>Consultar Cavalos</h1>
<?php 
	$sql = "SELECT * FROM cavalo AS a INNER JOIN haras AS c ON a.haras_id_Haras = c.id_Haras ORDER BY nome_cavalo";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	
	if ($qtd > 0) {
		print "<strong><p>Encontrou <strong>$qtd</strong> resultado(s)</p></strong>";

		print "<table style='text-align:center;' class='table table-dark table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Id</th>";
		print "<th>Nome do Haras</th>";
		print "<th>Nome do Cavalo</th>";
		print "<th>Espécie do Cavalo</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_cavalo."</td>";
			print "<td>".$row->nome_Haras."</td>";
			print "<td>".$row->nome_cavalo."</td>";
			print "<td>".$row->especie_cavalo."</td>";
			print "<td>
					<button class='btn btn-outline-success' onclick=\"location.href='?page=cavalos-editar&id_cavalo=".$row->id_cavalo."';\">Editar</button><h>
					<button class='btn btn-outline-danger' onclick=\"if(confirm('Quer mesmo deletar??')){location.href='?page=cavalos-salvar&acao=excluir&id_cavalo=".$row->id_cavalo."';}else{false;}\">Deletar</button>
			</td>";
			print "</tr>";
		};
		print "</table>";
	} else {
		print "<div class='alert alert-danger'>Nenhum dado encontrado!!</div>";
	}
	
?> 