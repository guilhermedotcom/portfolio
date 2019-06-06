<?php include "lock.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Filmes - CRUD</title>
	<meta charset="utf-8">
</head>
<body class="container-fluid text-center">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-toggler navbar-dark bg-dark mt-0">
<button class="navbar-toggler" type ="button" data-toggler="collapse" data-target="#navbarSite">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSite">
	<ul class="navbar-nav mr-auto">
		<a class="navbar-brand" href="index.php"></a>
		<img src="logo.jpg" width="50" height="50" class="mr-4 rounded">
		<h5 class="text-white p-2 mb-2">Acervo de Filmes: O melhor cadastro de filmes online.</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
<img src="logos.jpg">

	<?php include 'menu.php' ?>

	<?php

	if(empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['ano']) || empty($_POST['diretor']) || empty($_POST['estudio']))
	{
		echo '<h6 class="alert alert-warning">Atenção!: Preencha todo o formulário de cadastro.</h6>';
	}
	else
	{
		$titulo = $_POST['titulo'];
		$genero = $_POST['genero'];
		$ano = $_POST['ano'];
		$diretor = $_POST['diretor'];
		$estudio = $_POST['estudio'];

		include 'conn.php';

		$sql = "INSERT INTO tb_filmes (titulo, genero, ano, diretor, estudio) VALUES ('$titulo', '$genero', '$ano', '$diretor', '$estudio')";

		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);

		if ($linhas > 0)
		{
			echo '<h6 class="alert alert-success">Contato cadastrado com sucesso!</h6>';
		}
		else
		{
			echo '<h6 class="alert alert-danger">Erro ao cadastrar contato. Tente novamente ou contate o suporte.</h6>';
		}
	}

	?>
<p></p>
<ul class="nav rounded bg-dark text-white">
<div class="container-fluid" id="container-rodape">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2">Desenvolvido por Guilherme Ferreira</p>	
			</div>
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2">Email: guilhermerck@gmail.com</p>	
			</div>
			<div class="col-xs-12 col-sn-12 col-md-4 col-lg-4">
			<p class="p- mb-2">Contato: (41)98731-5457</p>
			</div>
		</div>
	</div>
</div>
</ul>
</body>
</html>