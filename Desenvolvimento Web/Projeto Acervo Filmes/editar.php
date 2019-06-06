<?php include "lock.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Filmes - CRUD</title>
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
		<h5 class="text-white p-2 mb-2">Área dedicada a edição de filmes:</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
<img src="logos.jpg">

	<?php include 'menu.php';

	$form = false;

	if(empty($_GET['id_filme']))
	{
		
		echo '<h5 class="alert alert-warning">Não foi possível carregar o formulário de edição</h5>';
	}
	else
	{

		include 'conn.php';

		$id_filme = $_GET['id_filme'];
		
		$sql = "SELECT titulo, genero, ano, diretor, estudio FROM tb_filmes WHERE id_filme = $id_filme";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			
			$filme = mysqli_fetch_assoc($result);
			
			$form = true;

		}
	}
	
	if($form){
	?>

		<form action="editado.php" method="post">
	
		<div class="alert alert-success"><h6>Cadastro de Filmes</h6></div>

		<p>
			<label>Titulo do Filme:</label><br>
			<input class="form-control" type="text" name="titulo" placeholder="Título do Filme" value="<?php echo $filme['titulo']?>">

		</p>

		<p>
			<label>Genero:</label><br>
			<input class="form-control" type="text" name="genero" placeholder="Genero" value="<?php echo $filme['genero']?>">

		</p>

		<p>
			<label>Ano de Lançamento:</label><br>
			<input class="form-control" type="number" name="ano" placeholder="Ano de lançamento" value="<?php echo $filme['ano']?>">

		</p>

		<p>
			<label>Diretor:</label><br>
			<input class="form-control" type="text" name="diretor" min="1" placeholder="Diretor" value="<?php echo $filme['diretor']?>">

		</p>

		<p>
			<label>Estúdio:</label><br>
			<input class="form-control" type="text" name="estudio" min="1" placeholder="Estúdio" value="<?php echo $filme['estudio']?>">

		</p>

		<input type="hidden" name ="id_filme" value="<?php echo $id_filme ?>">

		<button type="submit" class="btn btn-success">Salvar</button>
		<button type="reset" class="btn btn-danger">Apagar</button>
		
	</form>

	<?php }?>
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