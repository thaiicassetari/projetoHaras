<?php
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		$Haras = $_POST["haras_id_Haras"];
		$cavalo = $_POST["nome_cavalo"];
		$especie  = $_POST["especie_cavalo"];

		$sql = "INSERT INTO cavalo (haras_id_Haras, nome_cavalo, especie_cavalo)
			    VALUES ({$Haras}, '{$cavalo}', '{$especie}')";
		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<script>alert('Cadastrado com sucesso!!');</script>";
			print "<script>location.href='?page=cavalos-cadastrar';</script>";
		} else {
			print "<div class='alert alert-danger'>Erro ao cadastrar, tente novamente!! </div>";
			print "<script>location.href='?page=cavalos-cadastrar';</script>";
		}

		break;

	case 'editar':
		$Haras = $_POST["haras_id_Haras"];
		$cavalo = $_POST["nome_cavalo"];
		$especie  = $_POST["especie_cavalo"];

		$sql = "UPDATE cavalo SET haras_id_Haras={$Haras}, nome_cavalo = '{$cavalo}', especie_cavalo = '{$especie}' WHERE id_cavalo=".$_REQUEST["id_cavalo"];
		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<script>alert('Editado com sucesso!!');</script>";
			print "<script>location.href='?page=cavalos-consultar';</script>";
		} else {
			print "<div class='alert alert-warning'>Erro ao editar, tente novamente!! </div>";
			print "<script>location.href='?page=cavalos-consultar';</script>";

		}
		break;

	case 'excluir':
		$sql = "DELETE FROM cavalo WHERE id_cavalo = " . $_REQUEST["id_cavalo"];
		$res = $conn->query($sql) or die($conn->error);

		if ($res == true) {
			print "<script>alert('Deletado com sucesso!!');</script>";
			print "<script>location.href='?page=cavalos-consultar';</script>";
		} else {
			print "<div class='alert alert-danger'>Erro ao deletar, verifique e tente novamente!! </div>";
			print "<script>location.href='?page=cavalos-consultar';</script>";
		}
		break;
}
