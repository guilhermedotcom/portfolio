<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<div class="view" style="background-image: url('backgroundsite.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
<img src="logo.png" class="rounded mx-auto d-block">
</div>
	<?php 

	include 'menu.php';

	include 'conn.php';

	$sql = "SELECT * FROM tb_herois";

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0)
	{
		
		echo '<h3 class="text-white text-center bg-primary rounded">Heróis Cadastrados:</h3>';

		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo '<p>';

			foreach ($registros as $indice => $valor) 
			{
				echo "<strong>$indice</strong>: $valor <br>";
			}

			echo '</p>';
		}
	}
	else
	{
		echo '<h3 class="alert alert-info">Não há heróis cadastrados...</h3>';
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