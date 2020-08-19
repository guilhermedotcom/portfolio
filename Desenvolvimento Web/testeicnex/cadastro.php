<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>ICNEX Comunicação Web</title>
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
		<img src="logotipo.png" width="100" height="50" class="mr-4">
		<h5 class="text-white p-2 mb-2">ICNEX Comunicação Web</h5>
	</ul>
	<form class="form-inline ml-5">
		<input class="form-control mr-2" type="search" placeholder="Buscar...">
		<button class="btn btn-outline-light" type="submit">Ok</button>
	</form>
</div>
</nav>
	<img src="fundo.jpg" class="img-fluid">

	<?php include 'menu.php' ?>

	<?php

	if(empty($_POST['usuario']) || empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['cep']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['complemento']) || empty($_POST['bairro']) || empty($_POST['cidade']) || empty($_POST['estado']) || empty($_POST['interesse']))
	{
		echo '<h6 class="alert alert-warning">Atenção!: Preencha todo o formulário de cadastro.</h6>';
	}
	else
	{
		$usuario = $_POST['usuario'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$cep = $_POST['cep'];
		$rua = $_POST['rua'];
		$numero = $_POST['numero'];
		$complemento = $_POST['complemento'];
		$bairro = $_POST['bairro'];
		$cidade = $_POST['cidade'];
		$estado = $_POST['estado'];
		$interesse = $_POST['interesse'];

		//incluir arquivo de conexão completo:
		include 'conn.php';

		//criar o comando SQL para inserir os dados na tabela tb_contatos:
		//'aspas simples' para gravar dados sem ser valores sem serem númericos:
		$sql = "INSERT INTO tb_usuarios (usuario, nome, email, cep, rua, numero, complemento, bairro, cidade, estado, interesse) VALUES ('$usuario', $nome, '$email', '$cep', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$interesse')";

		//executar comando sql:
		$result = mysqli_query($conn, $sql);

		//recebe o número de linhas afetadas na tabela pelo comando sql executado:
		$linhas = mysqli_affected_rows($conn);

		//verificar valor de $linhas:
		if ($linhas > 0)
		{
			echo '<h6 class="alert alert-success">Usuário cadastrado com sucesso!</h6>';
		}
		else
		{
			echo '<h6 class="alert alert-danger">Erro ao cadastrar usuário. Tente novamente ou contate o suporte.</h6>';
		}
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
			<p class="p- mb-2">Contato: (41) 98731-5457</p>
			</div>
		</div>
	</div>
</div>
</ul>
</body>
</html>