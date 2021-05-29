<h1>Consultar Haras</h1>
<?php 
	$sql = "SELECT * FROM haras ORDER BY nome_Haras";
	$res = $conn->query($sql) or die($conn->error);
	$qtd = $res->num_rows;

	
	if ($qtd > 0) {
		print "<strong><p>Encontrou <strong>$qtd</strong> resultado(s)</p></strong>";

		print "<table style='text-align:center;' class='table table-dark table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Id</th>";
		print "<th>Nome do Haras</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_Haras."</td>";
			print "<td>".$row->nome_Haras."</td>";
			print "<td>
				<button class='btn btn-outline-success' onclick=\"location.href='?page=haras-editar&id_Haras=".$row->id_Haras."';\">Editar</button> <h>
				<button class='btn btn-outline-danger' onclick=\"if(confirm('Quer mesmo deletar??')){location.href='?page=haras-salvar&acao=excluir&id_Haras=".$row->id_Haras."';}else{false;}\">Deletar</button>
			</td>";
			print "</tr>";
		};
		print "</table>";


	}  else {
		print "<div class='alert alert-danger'>Nenhum dado encontrado!!</div>";
	}
	
?>
