 <?php include'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir Posts</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center">
<br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>
	<?php 

	include 'menu.php';

	include 'conn.php';
	include 'functions.php';

	$sql = "SELECT 	p.id_post, 
					p.post, p.id_userfk,p.data_time,
					(
						SELECT COUNT(id_comment)
						FROM tb_comments AS c
						WHERE c.id_post = p.id_post
					) AS qtdc
			FROM tb_posts AS p LIMIT 31 ";

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0)
	{
		
		echo '<h5 class="text-white text-center bg-danger">Posts publicados:</h5>';
		echo"<h6 class='alert alert-info text-center'>Posts publicados mundo afora:</h6>";
		echo verificarMsg();


		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo '<p>';

			foreach ($registros as $indice => $valor) 
			{
				$id_post = $registros['id_post'];
				echo "<strong>$indice</strong>: $valor <br>";
			}
			echo '<h4><a href="comentar.php?id_post='.$id_post.'" 
			class="btn btn-info btn-sm">
			Comentar</a></h4>';

			echo '</p>';
		}
	}
	else
	{
		echo '<h5 class="alert alert-info">Não há nenhum post publicado...</h5>';
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