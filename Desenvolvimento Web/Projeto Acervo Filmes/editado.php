<?php include "lock.php";  

if(empty($_POST['id_filme']) || empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['ano']) || empty($_POST['diretor']) || empty($_POST['estudio']))
{
	header('location:gerenciar_filmes.php?msg=emptyFields');
}
else
{
	$id_filme = $_POST['id_filme'];
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero'];
	$ano = $_POST['ano'];
	$diretor = $_POST['diretor'];
	$estudio = $_POST['estudio'];

	include 'conn.php';

	$sql = "UPDATE tb_filmes SET titulo = '$titulo', genero = '$genero', ano = '$ano', diretor = '$diretor', estudio = '$estudio' WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar_filmes.php?msg=edtSuccess');
	}
	else
	{
		header('location:gerenciar_filmes.php?msg=edtError');
	}
}

?>