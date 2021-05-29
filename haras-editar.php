<h1>Editar Haras</h1> <br>
<?php
	$sql = "SELECT * FROM haras WHERE id_Haras = ".$_REQUEST["id_Haras"];
	$res = $conn->query($sql) or die($conn->error);
	$row = $res->fetch_object();
?>

<form action="?page=haras-salvar" method="POST">
	<input type="hidden" name="acao" value="editar"> <!--hidden=oculto -->
	<input type="hidden" name="id_Haras" value="<?php print $row->id_Haras; ?>">
	<div class="form-group">
		<label>Nome do Haras</label>
		<input type="text" name="nome_Haras" value="<?php print $row->nome_Haras; ?>" class="form-control">
	</div>
	<div class="form-group">
		<button class="btn btn-success" type="submit">Enviar</button>
	</div>
</form>