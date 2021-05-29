<h1>Consultar Funcionário</h1>
<?php
	$sql = "SELECT * FROM funcionario AS a INNER JOIN haras AS c ON a.Haras_id_Haras = c.id_Haras ORDER BY nome_funcionario"; #inner join  /tabela funcionario-sql
	$res = $conn->query($sql) or die($conn->error); 
	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<strong><p><em>Encontrou <strong>$qtd</strong> resultado(s)</em></p></strong>";

		print "<table style='text-align:center;'class='table table-dark table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Id</th>";
		print "<th>Nome do Haras</th>";
		print "<th>Nome do funcionário</th>";
		print "<th>Cargo funcionário</th>";
		print "<th>Área funcionário</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_funcionario."</td>";
			print "<td>".$row->nome_Haras."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->cargo_funcionario."</td>";
			print "<td>".$row->area_funcionario."</td>";
			print "<td>
					<button class='btn btn-outline-success' onclick=\"location.href='?page=funcionario-editar&id_funcionario=".$row->id_funcionario."';\">Editar</button>

					<button class='btn btn-outline-danger' onclick=\"if(confirm('Deseja mesmo deletar??')){location.href='?page=funcionario-salvar&acao=excluir&id_funcionario=".$row->id_funcionario."';}else{false;}\">Deletar</button>
			     </td>";
			print "</tr>";
		};
		print "</table>";
	} else {
		print "<div class='alert alert-danger'>Nenhum dado encontrado!!</div>";
	}
	

?>