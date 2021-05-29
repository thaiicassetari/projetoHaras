<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO haras (nome_Haras)
			    VALUES ('".$_POST["nome_Haras"]."')";
			$res = $conn->query($sql) or die($conn->error);
			
			if ($res==true) {
				print "<script>alert('Cadastrado com sucesso!!');</script>";
				print "<script>location.href='?page=haras-cadastrar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao cadastrar, tente novamente!! </div>";
				print "<script>location.href='?page=haras-cadastrar';</script>";
			}
			
			break;

		case 'editar':
			$sql = "UPDATE haras SET nome_Haras = '".$_POST["nome_Haras"]."' WHERE id_Haras =".$_REQUEST["id_Haras"];
			$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Editado com sucesso!!');</script>";
				print "<script>location.href='?page=haras-consultar';</script>";
			} else {
				print "<div class='alert alert-warning'>Erro ao editar, tente novamente!! </div>";
				print "<script>location.href='?page=haras-consultar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM haras WHERE id_Haras = ".$_REQUEST["id_Haras"];
			$res = $conn->query($sql) or die($conn->error);

			if ($res==true) {
				print "<script>alert('Deletado com sucesso!!');</script>";
				print "<script>location.href='?page=haras-consultar';</script>";
			} else {
				print "<div class='alert alert-danger'>Erro ao deletar, verifique e tente novamente!! </div>";
				print "<script>location.href='?page=haras-consultar';</script>";
			}
			break;
		
		
	}

?>