<h1>Consultar Clientes</h1> 
<?php
	$sql = "SELECT * FROM clientes AS a INNER JOIN funcionario AS c ON a.funcionario_id_funcionario = c.id_funcionario ORDER BY nome_clientes"; #inner join  /tabela clientes-sql
	$res = $conn->query($sql) or die($conn->error); 
	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<strong><p><em>Encontrou <strong>$qtd</strong> resultado(s)</em></p></strong>";

		print "<table style='text-align:center;'class='table table-dark table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Id</th>";
		print "<th>Nome do funcionário</th>";
		print "<th>Nome do cliente</th>";
		print "<th>Telefone</th>";
		print "<th>Cpf</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_clientes."</td>";
			print "<td>".$row->nome_funcionario."</td>";
			print "<td>".$row->nome_clientes."</td>";
			print "<td>".$row->fone_clientes."</td>";
			print "<td>".$row->cpf_clientes."</td>";
			print "<td>".$row->dt_nascimento_clientes."</td>";
			print "<td>
					<button class='btn btn-outline-success' onclick=\"location.href='?page=clientes-editar&id_clientes=".$row->id_clientes."';\">Editar</button>

					<button class='btn btn-outline-danger' onclick=\"if(confirm('Deseja mesmo deletar??')){location.href='?page=clientes-salvar&acao=excluir&id_clientes=".$row->id_clientes."';}else{false;}\">Deletar</button>
			     </td>";
			print "</tr>";
		};
		print "</table>";
	} else {
		print "<div class='alert alert-danger'>Nenhum dado encontrado!!</div>";
	}
	

?>