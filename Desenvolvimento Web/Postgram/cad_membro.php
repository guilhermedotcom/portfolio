<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar Membro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark"><br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php include 'menu.php'; ?>
	

	<form action="cadastro_membro.php" method="post">
		
		<h5 class="bg-danger text-white">Cadastro de membro:</h5>
		<h6 class='alert alert-info'>Cadastro rápido e fácil para curtir o POSTGRAM!</h6>

		<p>
			<label><strong>Usuário:</strong></label><br>
			<input class="form-control" type="text" name="username" placeholder="Usuário">
		</p>
		<p>
			<label><strong>Senha:</strong></label><br>
			<input class="form-control" type="password" name="password" placeholder="Senha">
		</p>
		<p>
			<label><strong>E-mail:</strong></label><br>
			<input class="form-control" type="email" name="email" placeholder="E-mail">
		</p>

		<button type="submit" class="btn btn-info">Salvar</button>
		<button type="reset" class="btn btn-danger">Limpar</button>
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