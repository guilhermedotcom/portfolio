<?php include 'lock.php';

if(empty($_POST['usuario']) || empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['telefone']) || empty($_POST['cep']) || empty($_POST['rua']) || empty($_POST['numero']) || empty($_POST['complemento']) || empty($_POST['bairro']) || empty($_POST['cidade']) || empty($_POST['estado']) || empty($_POST['interesse']))
{
	header('location:gerenciar.php?msg=emptyFields');
}
else
{
	$user = $_POST['usuario'];
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

	include 'conn.php';

	$sql = "UPDATE tb_usuarios SET usuario = '$usuario', nome = '$nome', email = '$email', cep = '$cep', rua = '$rua', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', estado = '$estado', interesse = '$interesse' WHERE id = $id";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar.php?msg=edtSuccess');
	}
	else
	{
		header('location:gerenciar.php?msg=edtError');
	}
}

?>