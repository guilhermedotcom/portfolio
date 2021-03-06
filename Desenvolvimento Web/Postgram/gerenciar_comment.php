<?php include'lock.php'; ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar Comentários - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center text-dark">
<br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php 
	include 'menu.php';

	include 'conn.php';
	include 'functions.php';
	echo verificarMsg();

	$sql = "SELECT * FROM tb_comments WHERE id_user =".$_SESSION['id_user'];

	$result = mysqli_query($conn, $sql);

	$linhas = mysqli_affected_rows($conn);

	if($linhas > 0)
	{	
		echo '<h5 class="bg-danger text-white">Gerenciar Comentários Públicados:</h5>';
		echo"<h6 class='alert alert-info'>Área dedicada ao gerenciamento de comentários:</h6>";

		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo '<p>';

			foreach ($registros as $indice => $valor) 
			{
				if($indice == 'id_comment')
				{
					$id_comment = $valor;
				}
				echo "<strong>$indice</strong>: $valor <br>";
			}

			echo '<a href="deletar_comment.php?id_comment='.$id_comment.'"  
			onclick="return confirm(\'Deseja excluir este post?\')" 
			class="btn btn-danger btn-sm">
			Deletar</a>';

			echo ' <a href="editar_comment.php?id_comment='.$id_comment.'"   
			class="btn btn-info btn-sm">
			Editar</a>';

			echo '</p>';
		}
	}
	else
	{
		echo '<h6 class="alert alert-info">Não há nenhum comentário publicado...</h6>';
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