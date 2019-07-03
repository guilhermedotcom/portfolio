<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Post</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center"><br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php include 'menu.php'; ?>

	<form action="cadastro_post.php" method="post">
		
		<h5 class="bg-danger text-white text-center">Faça aqui sua públicação:</h5>
		<h6 class='alert alert-info text-center'>Publique seu post e tenha interação com o mundo!</h6>

			<label for="post"></label>
			<textarea class="form-control rounded" type="text" textarea name="post" placeholder="No que voce está pensando?"
			maxlength="300" rows="4" cols="5"></textarea><br>

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