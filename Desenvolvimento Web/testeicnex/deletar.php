<?php include 'lock.php'; 

if(empty($_GET['id']))
{
	header('location:gerenciar.php?msg=noId');
}
else
{
	$id = $_GET['id'];

	include 'conn.php';

	$sql = "DELETE FROM tb_usuarios WHERE id = $id";

	$result = mysqli_query($conn, $sql);
	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:gerenciar.php?msg=delSuccess');
	}
	else
	{
		header('location:gerenciar.php?msg=delError');
	}
}

?>