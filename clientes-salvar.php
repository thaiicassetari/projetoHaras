<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$funcionario = $_POST["funcionario_id_funcionario"];
			$nome = $_POST["nome_clientes"];
			$fone = $_POST["fone_clientes"];
			$cpf = $_POST["cpf_clientes"];
			

			$sql = "INSERT INTO CLIENTES (funcionario_id_funcionario, nome_clientes, fone_clientes, cpf_clientes, dt_nascimento_clientes)
				VALUES ({$funcionario}, '{$nome}', '{$fone}', '{$cpf}', '".date("Y-m-d")."') "; 

			$res = $conn->query($sql) or die($conn->error);

			if ($res == true) {
			print "<script>alert('Cadastrado com sucesso!!');</script>";
			print "<script>location.href='?page=clientes-cadastrar';</script>";
		} else {
			print "<div class='alert alert-danger'>Erro ao cadastrar, tente novamente!! </div>";
			print "<script>location.href='?page=clientes-consultar';</script>";
		}

			break;

		case 'editar':
			$funcionario = $_POST["funcionario_id_funcionario"];
	 		$nome = $_POST["nome_clientes"];
	 		$fone = $_POST["fone_clientes"];
	 		$cpf = $_POST["cpf_clientes"];
	 		$data = $_POST["dt_nascimento_clientes"];

	 		$sql = "UPDATE clientes SET funcionario_id_funcionario={$funcionario}, nome_clientes='{$nome}', fone_clientes='{$fone}', cpf_clientes='{$cpf}', dt_nascimento_clientes= '{$data}' WHERE id_clientes=".$_REQUEST["id_clientes"];
	 		$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Editado com sucesso!!');</script>";
				print "<script>location.href='?page=clientes-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao editar, tente novamente!! </div>";
				print "<script>location.href='?page=clientes_editar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM clientes WHERE id_clientes=".$_REQUEST["id_clientes"];
	 		$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Deletado com sucesso!!');</script>";
				print "<script>location.href='?page=clientes-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao deletar, tente novamente!! </div>";
				print "<script>location.href='?page=clientes_consultar';</script>";
			}
			break;
		
		
	}


 ?>