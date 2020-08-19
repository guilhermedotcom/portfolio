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

	<?php include 'menu.php';

	$form = false; //ainda não sei se o formulário será carregado ou não. portanto essa variável recebe o valor 'false'

	//se o parametro 'id' estiver vazio
	if(empty($_GET['id']))
	{
		//mensagem de erro
		echo '<h5 class="alert alert-warning">Não foi possível carregar o formulário de edição</h5>';
	}
	else
	{

		include 'conn.php';

		$id = $_GET['id'];
		
		$sql = "SELECT usuario, nome, email, telefone, cep, rua, numero, complemento, bairro, cidade, estado, interesse FROM tb_usuarios WHERE id = $id";

		$result = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			//transformamos  os dados retornados pela consulta num array associativo, e o armazenamos na varíavel 'contato' (que neste momento é um array)
			$contato = mysqli_fetch_assoc($result);
			//o formulário poderá ser carregado:
			$form = true; // será usada em teste futuro

		}
	}
	
	if($form){
	?>

	<form action="editado.php" method="post">
	
		<div class="alert alert-success"><h6>Cadastro de Usuário</h6></div>

		<p>
			<label>Usuário:</label><br>
			<input class="form-control" type="text" name="usuario" placeholder="Usuário" value ="<?php echo $usuario['user'] ?>">

		</p>

		<p>
			<label>Nome:</label><br>
			<input class="form-control" type="text" name="nome" min="1" placeholder="Nome" value="<?php echo $usuario['nome'] ?>">

		</p>

		<p>
			<div class="form-group">
    		<label for="exampleInputEmail1">Email:</label>
    		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@" value="<?php echo $usuario['email'] ?>">
    		<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
  			</div>
		</p>
		<p>
			<label for="input-sm">Telefone:</label><br>
			<input class="form-control input-sm" type="text" name="telefone" placeholder="Telefone" value="<?php echo $usuario['telefone'] ?>">

		</p>
		<h6>Dados de Endereço:</h6>
		<p>
			<label for="input-sm">CEP:</label><br>
			<input class="form-control input-sm" type="text" name="cep" placeholder="CEP" value="<?php echo $usuario['cep'] ?>">

		</p>
		<p>
			<label for="input-sm">Rua:</label><br>
			<input class="form-control input-sm" type="text" name="rua" placeholder="Rua" value="<?php echo $usuario['rua'] ?>">

		</p>
		<p>
			<label for="input-sm">Número:</label><br>
			<input class="form-control input-sm" type="number" name="numero" placeholder="Número" value="<?php echo $usuario['numero'] ?>">

		</p>
		<p>
			<label for="input-sm">Complemento:</label><br>
			<input class="form-control input-sm" type="text" name="complemento" placeholder="Complemento" value="<?php echo $usuario['complemento'] ?>">

		</p>
		<p>
			<label for="input-sm">Bairro:</label><br>
			<input class="form-control input-sm" type="text" name="bairro" placeholder="Bairro" value="<?php echo $usuario['bairro'] ?>">

		</p>
		<p>
			<label for="input-sm">Cidade:</label><br>
			<input class="form-control input-sm" type="text" name="cidade" placeholder="Cidade" value="<?php echo $usuario['cidade'] ?>">

		</p>
		<p>
			<label for="input-sm">Estado:</label><br>
			<input class="form-control input-sm" type="text" name="estado" placeholder="Estado" value="<?php echo $usuario['estado'] ?>">

		</p>
		<p>
			<label for="select-sm">Interesses:</label><br>
			<select class="form-control" type="text" name="interesse" value="<?php echo $usuario['interesse'] ?>">
			<option>Desenvolvimento de sites</option>
			<option>Conteúdos atualizados</option>
			<option>Criação de dominio de e-mail</option>
			<option>Criação de blog</option>
			<option>Envio de e-mails</option>
			<option>Personalização de redes sociais</option>
		</select>
		</p>

		<input type="hidden" name ="id" value="<?php echo $id ?>">

		<button type="submit" class="btn btn-primary">Salvar</button>
		<button type="reset" class="btn btn-danger">Apagar</button>
		
	</form>

	<?php }  ?>
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