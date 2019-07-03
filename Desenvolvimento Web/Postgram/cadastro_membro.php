<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro Membro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php  

	include 'menu.php';
	include 'functions.php';
	echo verificarMsg();

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']))
	{

		echo '<h6 class="alert alert-warning">ATENÇÃO: Preencha todo o formulário de cadastro</h6>';


	}
	else
	{
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$email		= $_POST['email'];

		include 'conn.php';

		$sql = "INSERT INTO tb_users (username, password, email)
		 		VALUES ('$username', '$password' ,'$email')";

		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);

		if($linhas > 0)
		{
			header('location:login.php?msg=cadmSuccess');
		}
		else
		{
			echo '<h6 class="alert alert-danger">Erro ao cadastrar usuário. Tente novamente ou contate o suporte</h6>';
		}


	}



?>
</body>
</html>