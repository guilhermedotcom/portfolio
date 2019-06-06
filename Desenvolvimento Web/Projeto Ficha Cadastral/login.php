<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Home - CRUD</title>
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
	<?php include 'menu.php'; 
	include 'functions.php';
	echo verificarMsg();
	?>

	<h4>Login</h4>
	<h5 class="alert alert-info">Informe seus dados para acessar a área restrita.</h5>
	<form action="validar.php" method="post">

		<p>
			<label for="usarname">Usuário</label><br>
			<input class="form-control" type="text" name="username" placeholder="Usuário">
		</p>
		<p>
			<label for="password">Senha:</label><br>
			<input class="form-control" type="password" name="password" placeholder="Senha">
		</p>
		<p>
			<button type="submit" class="btn btn-primary">Entrar</button>
			<button type="reset" class="btn btn-danger">Limpar</button>
		</p>
		
	</form>

</body>
</html>