<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Gerenciar - CRUD</title>
	<meta charset="utf-8">
</head>
<body class="container-fluid text-center">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-toggler navbar-dark bg-secondary mt-0">
<button class="navbar-toggler" type ="button" data-toggler="collapse" data-target="#navbarSite">
	<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSite">
	<ul class="navbar-nav mr-auto">
		<a class="navbar-brand" href="index.php"></a>
		<img src="fichacadastral.ico" width="50" height="50" class="mr-4">
		<h5 class="text-white p-2 mb-2">Ficha Cadastral Online: O melhor site para armazenar seus dados.</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
<div class="text-center">
<img src="logos.png">
</div>
	
	<?php include 'menu.php' ?>
<div class="p-2 mb-2 alert alert-danger text-dark text-center rounded">Área dedicada a exclusão de contatos:</div>

	<?php
	
	//incluir arquivo de conexão:
	include 'conn.php';
	
	//criar comando sql:
	$sql = "SELECT * FROM tb_contatos";
	
	//executar comando sql e armazenar resultado na variavel:
	$result = mysqli_query($conn, $sql);
	
	// armazenar o numero de linhas afetadas na tabela pelo comando sql:
	$linhas = mysqli_affected_rows($conn);
	
	//se linhas > 0 = há registros para exibir!
	if ($linhas > 0) 
	{
		echo '<h6 class="alert alert-info">Contatos Cadastrados: (Área de Gerenciamento)</h6>';
		
		$registros = array();

		while ($registros = mysqli_fetch_assoc($result)) //$result a tabela inteira, $registos vira uma linha da tabela.
		{
			echo '<p>';

			foreach ($registros as $indice => $valor) // faz a linha virar um laço que mostra cada dado seguido.
			{
				if($indice == 'id')
				{
					$id = $valor; // copia o id do registro atual.
				}
				echo "<strong>$indice</strong>:" . $valor . "<br>";
			}
			
			echo '<a href="deletar.php?id='.$id.'"onclick="return confirm(\'Deseja excluir este contato?\')"class="btn btn-danger">DELETAR</a>';
			
			echo "</p>";
		}
	}
	else
	{
		echo "<h6>Não há contatos cadastrados...</h6>";
	}

	?>
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