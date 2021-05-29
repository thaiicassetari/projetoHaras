 <?php
	switch ($_REQUEST["acao"]) {
	 	case 'cadastrar':
	 		$Haras = $_POST["haras_id_Haras"];
	 		$nome = $_POST["nome_funcionario"];
	 		$cargo  = $_POST["cargo_funcionario"];
	 		$area = $_POST["area_funcionario"];

	 		$sql = "INSERT INTO funcionario (haras_id_Haras, nome_funcionario, cargo_funcionario, area_funcionario)
	 			VALUES ({$Haras}, '{$nome}', '{$cargo}', '{$area}')";
	 		$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Cadastrado com sucesso!!');</script>";
				print "<script>location.href='?page=funcionario-cadastrar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao cadastrar, tente novamente!! </div>";
				print "<script>location.href='?page=funcionario-cadastrar';</script>";
			}
			
	 		break;

	 	case 'editar':
	 		$Haras = $_POST["haras_id_Haras"];
	 		$nome = $_POST["nome_funcionario"];
	 		$cargo  = $_POST["cargo_funcionario"];
	 		$area = $_POST["area_funcionario"];

	 		$sql = "UPDATE funcionario SET haras_id_Haras={$Haras}, nome_funcionario='{$nome}', cargo_funcionario='{$cargo}', area_funcionario='{$area}' WHERE id_funcionario=".$_REQUEST["id_funcionario"];
	 		$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Editado com sucesso!!');</script>";
				print "<script>location.href='?page=funcionario-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao editar, tente novamente!! </div>";
				print "<script>location.href='?page=funcionario_consultar';</script>";
			}
			
	 		break;
	 		
	 	case 'excluir':
	 		$sql = "DELETE FROM funcionario WHERE id_funcionario=".$_REQUEST["id_funcionario"];
	 		$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Deletado com sucesso!!');</script>";
				print "<script>location.href='?page=funcionario-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao deletar, tente novamente!! </div>";
				print "<script>location.href='?page=funcionario_consultar';</script>";
			}
	 		break;
	 }; 


 ?>
