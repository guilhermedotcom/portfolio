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

	<form action="cadastro.php" method="post">
	
		<div class="alert alert-info"><h6>Cadastro de Usuário:</h6></div>

		<p>
			<label for="input-sm">Usuário:</label><br>
			<input class="form-control input-sm" type="text" name="usuario" placeholder="Usuário">

		</p>
		<p>
			<label for="input-sm">Nome Completo:</label><br>
			<input class="form-control input-sm" type="text" name="nome" placeholder="Nome Completo">

		</p>
		<p>
			<div class="form-group">
    		<label for="exampleInputEmail1">Email:</label>
    		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@">
    		<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  			</div>

		</p>
		<p>
			<label for="input-sm">Telefone:</label><br>
			<input class="form-control input-sm" type="text" name="telefone" placeholder="Telefone">

		</p>
		<h6>Dados de Endereço:</h6>
		<p>
			<label for="input-sm">CEP:</label><br>
			<input class="form-control input-sm" type="text" name="cep" placeholder="CEP">

		</p>
		<p>
			<label for="input-sm">Rua:</label><br>
			<input class="form-control input-sm" type="text" name="rua" placeholder="Rua">

		</p>
		<p>
			<label for="input-sm">Número:</label><br>
			<input class="form-control input-sm" type="number" name="numero" placeholder="Número">

		</p>
		<p>
			<label for="input-sm">Complemento:</label><br>
			<input class="form-control input-sm" type="text" name="complemento" placeholder="Complemento">

		</p>
		<p>
			<label for="input-sm">Bairro:</label><br>
			<input class="form-control input-sm" type="text" name="bairro" placeholder="Bairro">

		</p>
		<p>
			<label for="input-sm">Cidade:</label><br>
			<input class="form-control input-sm" type="text" name="cidade" placeholder="Cidade">

		</p>
		<p>
			<label for="input-sm">Estado:</label><br>
			<input class="form-control input-sm" type="text" name="estado" placeholder="Estado">

		</p>
		<p>
			<label for="select-sm">Interesses:</label><br>
			<select class="form-control" type="text" name="interesse">
			<option>Desenvolvimento de sites</option>
			<option>Conteúdos atualizados</option>
			<option>Criação de dominio de e-mail</option>
			<option>Criação de blog</option>
			<option>Envio de e-mails</option>
			<option>Personalização de redes sociais</option>
		</select>
		</p>

		<button type="submit" class="btn btn-primary">Salvar</button>
		<button type="reset" class="btn btn-danger">Apagar</button>
		
	</form>
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