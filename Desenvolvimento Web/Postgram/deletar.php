<?php
include 'functions.php';
	echo verificarMsg();  
if(empty($_GET['id_post']))
{
	header('location:gerenciar.php?msg=noId');
}
else
{
	$id_post = $_GET['id_post'];

	include 'conn.php';

	$sql = "DELETE FROM tb_posts WHERE id_post = $id_post";

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