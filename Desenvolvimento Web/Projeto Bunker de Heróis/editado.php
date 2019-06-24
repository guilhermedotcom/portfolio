<?php  

if(empty($_POST['nome'])  ||
   empty($_POST['universo']) ||
   empty($_POST['poder']) ||
   empty($_POST['vilao']) ||
   empty($_POST['id']))
{
	header('location:gerenciar.php?msg=emptyFields');
}
else
{
	$id 	= $_POST['id'];
	$nome 	= $_POST['nome'];
	$universo 	= $_POST['universo'];
	$poder	= $_POST['poder'];
	$vilao	= $_POST['vilao'];


	include 'conn.php';

	$sql = "UPDATE tb_herois SET 
	nome = '$nome', universo = '$universo', 
	poder = '$poder', vilao='$vilao' WHERE id = $id";

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