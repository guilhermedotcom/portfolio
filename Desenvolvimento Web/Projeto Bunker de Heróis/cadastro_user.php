<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>

	<?php  

	include 'menu.php';

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']))
	{

		echo '<h2 class="alert alert-warning">ATENÇÃO: Preencha todo o formulário de cadastro</h2>';

	}
	else
	{
		$username	= $_POST['username'];
		$password	= $_POST['password'];
		$email	= $_POST['email'];

		include 'conn.php';

		$sql = "INSERT INTO tb_users (username, password, email)
		 		VALUES ('$username', '$password' ,'$email')";

		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);

		if($linhas > 0)
		{
			echo '<h3 class="alert alert-success">Usuário cadastrado com sucesso!</h3>';
			header('location:login.php');
		}
		else
		{
			echo '<h3 class="alert alert-danger">Erro ao cadastrar usuário. Tente novamente ou contate o suporte</h3>';
		}


	}



	?>

<p></p>
<ul class="nav bg-dark text-white">
<div class="container-fluid" id="container-rodape">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2">Desenvolvido por Eduardo, Guilherme e Lorenzo</p>	
			</div>
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2"></p>	
			</div>
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2">Professor: Jason Sobreiro (SI)</p>
			</div>
		</div>
	</div>
</div>
</ul>
</body>
</html>