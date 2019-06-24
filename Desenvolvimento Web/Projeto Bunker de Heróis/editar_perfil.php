<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Perfil- CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>

	<?php include 'menu.php'; 
	session_start(); 

	$form = false;

	if(empty($_SESSION['id_user']))
	{
		echo '<h3 class="alert alert-warning">
		Não foi possível carregar o formulário de edição</h3>';
	}
	else
	{

		include 'conn.php';

		$id_user = $_SESSION['id_user'];

		$sql = "SELECT * FROM tb_users WHERE id_user = $id_user";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$contato = mysqli_fetch_assoc($result);

			$form = true;
		}
	}

	if ($form == true) {
	?>

	<form action="editado_perfil.php" method="post">
		
		<h3 class="bg-primary text-white">Cadastro de Contato</h3>

		<p>
			<label>Nome:</label><br>
			<input class="form-control" placeholder="Nome" type="text" name="username"
			value="<?php echo $contato['username'] ?>">
		</p>
		<p>
			<label>Senha:</label><br>
			<input class="form-control" placeholder="Senha" type="text" name="password"
			value="<?php echo $contato['password'] ?>">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input class="form-control" placeholder="E-mail" type="email" name="email"
			value="<?php echo $contato['email'] ?>">
		</p>

		
		<input type="hidden" name="id_user" 
		value="<?php echo $id_user ?>">

		<button type="submit" class="btn btn-success">Salvar</button>

	</form>

	<?php } ?>

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