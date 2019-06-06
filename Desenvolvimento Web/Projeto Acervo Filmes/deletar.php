<?php include "lock.php";  

if(empty($_GET['id_filme']))
{
	header('location:gerenciar_filmes.php?msg=noId');
}
else
{
	$id_filme = $_GET['id_filme'];

	include 'conn.php';

	$sql = "DELETE FROM tb_filmes WHERE id_filme = $id_filme";

	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar_filmes.php?msg=delSuccess');
	}
	else
	{
		header('location:gerenciar_filmes.php?msg=delError');
	}
}

?>