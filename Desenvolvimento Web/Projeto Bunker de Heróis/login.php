<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>

	<?php include 'menu.php'; ?>
	<h3 class="bg-primary text-white">Área de Login</h3>
	<h3 class="alert alert-success">Informe seus dados para acessar outras áreas do site.</h3>

	<form action="validar.php" method="post">
		
		<p>
			<label for="username"><strong>Usuário:</strong></label><br>
			<input class="form-control" type="text" name="username" placeholder="Usuário">
		</p>
		<p>
			<label for="password"><strong>Senha:</strong></label><br>
			<input class="form-control" type="password" name="password" placeholder="Senha">
		</p>
		<p>
			<button type="submit" class="btn btn-primary">Entrar</button>
			<button type="reset" class="btn btn-danger">Limpar</button>
		</p>

	</form>

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