<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Comentário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center">
<br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php include 'menu.php';
	include 'functions.php';
	echo verificarMsg(); 

	$form = false; 

	if(empty($_GET['id_comment']))
	{
		echo '<h3 class="alert alert-warning">
		Não foi possível carregar o formulário de edição</h3>';
	}
	else
	{

		include 'conn.php';

		$id_comment = $_GET['id_comment'];

		$sql = "SELECT comment, id_comment FROM tb_comments WHERE id_comment = $id_comment";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$contato = mysqli_fetch_assoc($result);

			$form = true;

		}
	}

	if ($form == true) {
	?>

	<form action="editado_comment.php" method="post">
		
		<h5 class="text-white text-center bg-danger">Edição de comentário:</h5>

		<p>
			<label>Post:</label><br>
			<textarea class="form-control" type="text" name="comment"
			><?php echo $contato['comment'] ?></textarea>
		</p>

		<input type="hidden" name="id_comment" 
		value="<?php echo $id_comment ?>">

		<button type="submit" class="btn btn-info">Salvar</button>
		<button type="reset" class="btn btn-danger">Limpar</button>

	</form>

	<?php } // fim do if '$form' ?>

</body>
</html>