 <?php include'lock.php'; ?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar Perfil - CRUD</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center">
<br>
<div>
	<img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

	<?php 
	// incluir menu
	include 'menu.php';
	include 'functions.php';
	echo verificarMsg();

	// incluir arquivo de conexão
	include 'conn.php';
	if (empty($_SESSION['id_user']))
	{
		echo "Nao foi possivel carregar";
	}
	else
	

		$id_user=$_SESSION['id_user'];


	// criar comando sql
	$sql = "SELECT * FROM tb_users WHERE id_user = $id_user";

	// executar comando sql e armazenar resultado na variavel
	$result = mysqli_query($conn, $sql);

	// armazenar o numero de linhas afetadas na tabela pelo comando sql executado
	$linhas = mysqli_affected_rows($conn);

	// se 'linhas' > 0 = há registros para exibir!
	if($linhas > 0)
	{
		
		echo '<h5 class="text bg-danger text-white text-center">Gerenciar meu perfil:</h5>';
		echo"<h6 class='alert alert-info text-center'>Área dedicada ao gerenciamento do seu perfil:</h6>";


		$registros = array();

		/* enquanto houver registros na tabela:
		copie a linha atual da tabela (incluindo o nome das 
		colunas) para o array associativo $registros.
		Como $registros é array associativo, o nome de cada indice é o mesmo que o nome das colunas da tabela (atualmente armazenada na variavel $result) */
		while ($registros = mysqli_fetch_assoc($result)) 
		{
			echo '<p>';

			/* para cada posição existente neste array $registros:
			copie o nome do indice atual do array para a variáve $indice, e o seu valor associado para a variável $valor */
			foreach ($registros as $indice => $valor) 
			{
				
				/* mostre na tela o valor atual de $indice e de $valor: */
				if($indice == 'id_user')
				{
					$id_user = $valor; // copia o id do registro atual
				}
				echo "<strong>$indice</strong>: $valor <br>";
			}


			// montagem do botão 'deletar'
			echo '<a href="deletar_perfil.php?id_post='.$id_user.'"  
			onclick="return confirm(\'Deseja excluir este perfil ? ATENÇÃO: Ao excluir esse perfil automaticamente apagará todos os posts cadastrados.\')" 
			class="btn btn-danger btn-sm">
			Deletar</a>';

			// montagem do botão 'editar'
			echo ' <a href="editar_perfil.php?id_post='.$id_user.'"   
			class="btn btn-info btn-sm">
			Editar Perfil</a>';

			echo '</p>';
		}
	}

	else
	{
		echo '<h6 class="alert alert-info">Não há nenhum perfil cadastrado...</h6>';
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