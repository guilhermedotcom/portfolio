<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Post</title>
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
	include 'functions.php';
	echo verificarMsg();

	if(empty($_POST['post']))
	{
		echo '<h6 class="alert alert-warning">ATENÇÃO: Não foi possível encontrar o post.</h6>';
	}
	else
	{
		session_start();
		$post= $_POST['post'];
		$id_user= $_SESSION['id_user'];

		include 'conn.php';

		$sql = "INSERT INTO tb_posts (post, id_userfk)
		 		VALUES ('$post','$id_user')";

		$result = mysqli_query($conn, $sql);

		$linhas = mysqli_affected_rows($conn);

		if($linhas > 0)
		{
			echo '<h6 class="alert alert-info">Post publicado com sucesso! Acesse a área dos posts <a href="exibir.php">aqui!</a></h6>';
		}
		else
		{
			echo '<h6 class="alert alert-danger">Erro ao publicar seu post. Tente novamente ou contate o suporte</h6>';
			
		}

		$sqlc = "DELETE posts FROM 
    	tb_posts AS t
  		JOIN
    	( SELECT data_time AS ts
      	FROM tb_posts
      	ORDER BY ts.data_time ASC
      	LIMIT 0 OFFSET 30
    	) tlimit
    	ON t.data_time > tlimit.ts";

	}



	?>
</body>
</html>