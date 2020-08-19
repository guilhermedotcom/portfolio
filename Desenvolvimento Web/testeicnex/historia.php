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

		<h4 class="text-center text-dark">Nossa História:</h4>
		<h6>A ICNEx foi fundada em Julho de 2004 com uma proposta no mercado de criação de sites e aplicações para internet direcionada à classe contábil e tornar acessível a inclusão digital, tendo como principal meta a desenvolver ferramentas que facilitam a rotina do escritório e conteúdo para o site, reduzindo os custos de manutenção mensal e possibilitando os clientes atualizar o conteúdo do site.

		Somos uma agência de web especializada na criação de sites exclusivos e totalmente dinâmicos. Nossa "família" de desenvolvedores são especialistas quando se fala em comunicação pela web.
		Temos um vasto conhecimento na elaboração e conteúdos dinâmicos para o ramo contábil, oferecemos também informações atualizadas diáriamente.

		Agora completando 12 anos de história, após adquirirmos vasta experiência, estamos desenvolvendo sites também para as demais atividades.
		</h6><p> </p><p> </p>
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