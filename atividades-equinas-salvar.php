<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$clientes = $_POST["clientes_id_clientes"];
			$cavalo = $_POST["cavalo_id_cavalo"];
			$modalidade  = $_POST["tipo_passeios"];
			

			$sql = "INSERT INTO passeios (clientes_id_clientes, cavalo_id_cavalo, tipo_passeios, data_passeios)
				   VALUES ({$clientes}, '{$cavalo}', '{$modalidade}', '".date("Y-m-d H:i:s")."')";

			$res = $conn->query($sql) or die($conn->error);

			if ($res == true) {
				print "<script>alert('Cadastrado com sucesso!!');</script>";
				print "<script>location.href='?page=atividades-equinas-cadastrar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao cadastrar, tente novamente!! </div>";
				print "<script>location.href='?page=atividades-equinas-cadastrar';</script>";
			}

			break;

		case 'editar':
			$clientes = $_POST["clientes_id_clientes"];
			$cavalo = $_POST["cavalo_id_cavalo"];
			$modalidade  = $_POST["tipo_passeios"];
			$data = $_POST["data_passeios"];

			$sql = "UPDATE passeios SET clientes_id_clientes={$clientes}, cavalo_id_cavalo = '{$cavalo}', tipo_passeios = '{$modalidade}', data_passeios = '{$data}' WHERE id_passeios=".$_REQUEST["id_passeios"];
			$res = $conn->query($sql) or die($conn->error);

			if ($res == true) {
				print "<script>alert('Editado com sucesso!!');</script>";
				print "<script>location.href='?page=atividades-equinas-consultar';</script>";
			} else {
				print "<div class='alert alert-warning'>Erro ao editar, tente novamente!! </div>";
				print "<script>location.href='?page=atividades-equinas-consultar';</script>";

			}
			break;

		case 'excluir':
			$sql = "DELETE FROM passeios WHERE id_passeios = " . $_REQUEST["id_passeios"];
			$res = $conn->query($sql) or die($conn->error);

			if ($res == true) {
				print "<script>alert('Deletado com sucesso!!');</script>";
				print "<script>location.href='?page=atividades-equinas-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao deletar, verifique e tente novamente!! </div>";
				print "<script>location.href='?page=atividades-equinas-consultar';</script>";
			}
			break;
	}