<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ICNEX Comunicação Web</title>
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
		<img src="logotipo.png" width="100" height="50" class="mr-4">
		<h5 class="text-white p-2 mb-2">ICNEX Comunicação Web</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
	<img src="fundo.jpg" class="img-fluid">

	<?php include 'menu.php'; 
	include 'functions.php';
	echo verificarMsg();
	?>

	<h5 class="alert alert-info">Login:</h5>
	<h6 class="alert alert-info">Informe seus dados para acessar a área restrita.</h6>
	<form action="validar.php" method="post">

		<p>
			<label for="usarname">Usuário</label><br>
			<input class="form-control" type="text" name="username" placeholder="Usuário">
		</p>
		<p>
			<label for="password">Senha:</label><br>
			<input class="form-control" type="password" name="senha" placeholder="Senha">
		</p>
		<p>
			<button type="submit" class="btn btn-primary">Entrar</button>
			<button type="reset" class="btn btn-danger">Limpar</button>
		</p>
		
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