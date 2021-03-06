<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Filmes - CRUD</title>
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

	<form action="cadastro.php" method="post">
	
		<div class="alert alert-success"><h6>Cadastro de Filmes</h6></div>

		<p>
			<label>Titulo do Filme:</label><br>
			<input class="form-control" type="text" name="titulo" placeholder="Título do Filme">

		</p>

		<p>
			<label>Genêro:</label><br>
			<select name="genero" class="form-control" type="text">
			<option>Ação</option>
			<option>Animação</option>
			<option>Aventura</option>
			<option>Comédia</option>
			<option>Dança</option>
			<option>Drama</option>
			<option>Documentário</option>
			<option>Erótico</option>
			<option>Fantasia</option>
			<option>Faroeste</option>
			<option>Ficção Ciêntifica</option>
			<option>Guerra</option>
			<option>Policial</option>
			<option>Romance</option>
			<option>Suspense</option>
			<option>Terror</option>
			</select>

		</p>

		<p>
			<label>Ano de Lançamento:</label><br>
			<input class="form-control" type="number" name="ano" placeholder="Ano de lançamento">

		</p>

		<p>
			<label>Diretor:</label><br>
			<input class="form-control" type="text" name="diretor" min="1" placeholder="Diretor">

		</p>

		<p>
			<label>Estúdio:</label><br>
			<input class="form-control" type="text" name="estudio" min="1" placeholder="Estúdio">

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