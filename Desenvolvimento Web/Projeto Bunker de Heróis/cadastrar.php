<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastrar - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>
<body class="text-center">

	<?php include 'menu.php'; ?>

	<form action="cadastro.php" method="post">
		
		<h3 class="bg-primary text-white">Cadastro de Herói</h3>

		<p>
			<label><strong>Nome do Herói:</strong></label><br>
			<input class="form-control" type="text" name="nome" placeholder="Herói">
		</p>

		<p>
			<label><strong>Universo:</strong></label><br>
			<select class="form-control" type="text" name="universo" placeholder="Universo">
			<option>Marvel</option>
			<option>DC</option>
			<option>Star Wars</option>
			<option>CAPCOM</option>
			<option>Disney</option>
			<option>Pixar</option>
			<option>Anime</option>
			<option>Outro</option>
			</select>
			
		</p>

		<p>
			<label><strong>Poder/Arma:</strong></label><br>
			<input class="form-control" type="text" name="poder" placeholder="Poder/Arma">
		</p>
		<p>
			<label><strong>Vilão:</strong></label><br>
			<input class="form-control" type="text" name="vilao" placeholder="Vilão">
		</p>

		<button type="submit" class="btn btn-success">Salvar</button>
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