<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar - CRUD</title>
	<meta charset="utf-8">
</head>
<body class="container-fluid text-center">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-toggler navbar-dark bg-secondary mt-0">
<button class="navbar-toggler" type ="button" data-toggler="collapse" data-target="#navbarSite">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSite">
	<ul class="navbar-nav mr-auto">
		<a class="navbar-brand" href="index.php"></a>
		<img src="fichacadastral.ico" width="50" height="50" class="mr-4">
		<h5 class="text-white p-2 mb-2">Ficha Cadastral Online: O melhor site para armazenar seus dados.</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
<img src="logos.png">

	<?php include 'menu.php' ?>

	<form action="cadastro.php" method="post">
	
		<div class="alert alert-success"><h6>Cadastro de Contato</h6></div>

		<p>
			<label>Nome:</label><br>
			<input class="form-control" type="text" name="nome" placeholder="Nome">

		</p>

		<p>
			<label>Idade:</label><br>
			<input class="form-control" type="number" name="idade" min="1" placeholder="Idade">

		</p>

		<p>
			<div class="form-group">
    		<label for="exampleInputEmail1">Email:</label>
    		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@">
    		<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  			</div>

		</p>
		<button type="submit" class="btn btn-success">Salvar</button>
		<button type="reset" class="btn btn-danger">Apagar</button>
		
	</form>
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