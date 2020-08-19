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
	
	<div class="alert alert-info" roles="alert">
		Faça seu login clicando <a href="login.php">aqui!</a> ou Cadastre-se clicando <a href="cadastrar.php">aqui!</a></div>

		<h4 class="alert alert-success text-center">Entre em contato com a gente:</h4>
		<h6>
			<p>Central de atendimento
			(41) 3434.5592 | (41) 3076.6657</p>
			<p>
			2ª via do boleto 2ª via do boleto
			ou pelos emails
			icnex@icnex.com.br ireno@contadores.cnt.br</p>

			R. Cel. José Leal Fontoura, 572 - sobr 3
			81.510-060 - Xaxim - Curitiba - Paraná

		</h6>
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
			<p class="p- mb-2">Contato: (41) 98538-6740</p>
			</div>
		</div>
	</div>
</div>
</ul>
</body>
</html>