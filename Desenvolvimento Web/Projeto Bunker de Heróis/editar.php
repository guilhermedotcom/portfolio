<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="container">

	<?php include 'menu.php'; 

	$form = false; 

	if(empty($_GET['id']))
	{
		echo '<h3 class="alert alert-warning">
		Não foi possível carregar o formulário de edição</h3>';
	}
	else
	{

		include 'conn.php';

		$id = $_GET['id'];

		$sql = "SELECT nome, universo, poder, vilao FROM tb_herois WHERE id = $id";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$contato = mysqli_fetch_assoc($result);

			$form = true;

		}
	}

	if ($form == true) {
	?>

	<form action="editado.php" method="post">
		
		<h2>Cadastro de Contato</h2>

		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome"
			value="<?php echo $contato['nome'] ?>">
		</p>

		<p>
			<label>Universo:</label><br>
			<input type="text" name="universo"
			value="<?php echo $contato['universo'] ?>">
		</p>

		<p>
			<label>Poder:</label><br>
			<input type="text" name="poder"
			value="<?php echo $contato['poder'] ?>">
		</p>
		<p>
			<label>Vilão:</label><br>
			<input type="text" name="vilao"
			value="<?php echo $contato['vilao'] ?>">
		</p>

		<input type="hidden" name="id" 
		value="<?php echo $id ?>">

		<button type="submit" class="btn btn-success">Salvar</button>

	</form>

	<?php } // fim do if '$form' ?>

</body>
</html>