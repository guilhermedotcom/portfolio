<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Perfil</title>
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
	session_start(); 

	$form = false; // ainda não sei se o formulário será 
	// carregado ou não. Portanto, essa variável recebe
	// o valor 'false'

	// se o parâmetro 'id' estiver vazio
	if(empty($_SESSION['id_user']))
	{
		// mensagem de erro
		echo '<h3 class="alert alert-warning">
		Não foi possível carregar o formulário de edição</h3>';
	}
	else
	{

		include 'conn.php';

		$id_user = $_SESSION['id_user'];

		$sql = "SELECT * FROM tb_users WHERE id_user = $id_user";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			// transformamos os dados retornados pela
			// consulta num array associativo, e o 
			// armazenamos na variável 'contato'
			// (que neste momento é um array)
			$contato = mysqli_fetch_assoc($result);
			// o formulário poderá ser carregado:
			$form = true; // será usada em teste futuro

		}
	}

	if ($form == true) {
	?>

	<form action="editado_perfil.php" method="post">
		
		<h5 class="text-white text-center bg-danger">Edição de perfil</h5>

		<p>
			<label>Nome:</label><br>
			<input class="form-control" type="text" name="username"
			value="<?php echo $contato['username'] ?>">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input class="form-control" type="email" name="email"
			value="<?php echo $contato['email'] ?>">
		</p>

		<p>
			<label>Senha:</label><br>
			<input class="form-control" type="text" name="password"
			value="<?php echo $contato['password'] ?>">
		</p>
		<input type="hidden" name="id_user" 
		value="<?php echo $id_user ?>">

		<button type="submit" class="btn btn-info">Salvar</button>
		<button type="reset" class="btn btn-danger">Limpar</button>

	</form>

	<?php } // fim do if '$form' ?>

</body>
</html>