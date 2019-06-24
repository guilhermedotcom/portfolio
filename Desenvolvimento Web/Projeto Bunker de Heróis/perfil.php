 <?php include'lock.php'; ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar Perfil - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>

	<?php 
	include 'menu.php';
 	
	include 'functions.php';

	echo verificarMsg();

	include 'conn.php';
	if (empty($_SESSION['id_user']))
	{
		echo '<h4 class="alert alert-danger">Nao foi possivel carregar</h4>';
	}
	else
	

		$id_user=$_SESSION['id_user'];


	$sql = "SELECT * FROM tb_users WHERE id_user = $id_user";

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0)
	{
		
		echo '<h3 class="bg-primary text-white">Área de gerenciamento do usuário:</h3>';

		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo '<p>';

			foreach ($registros as $indice => $valor) 
			{
				if($indice == 'id_user')
				{
					$id_user = $valor;
				}
				echo "<strong>$indice</strong>: $valor <br>";
			}


			echo '<a href="deletar_perfil.php?id='.$id_user.'"  
			onclick="return confirm(\'Deseja excluir este perfil?\')" 
			class="btn btn-danger btn-sm">
			Deletar</a>';

			echo ' <a href="editar_perfil.php?id='.$id_user.'"   
			class="btn btn-warning btn-sm">
			Editar Perfil</a>';

			echo '</p>';
		}
	}

	else
	{
		echo '<h3>Não há nenhum perfil cadastrado...</h3>';
	}

	?>

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