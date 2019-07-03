<?php
include 'functions.php';
	echo verificarMsg();  

if(empty($_POST['id_post']) or
   empty($_POST['post']))
{
	header('location:gerenciar.php?msg=emptyFields');
}
else
{
	$id_post= $_POST['id_post'];
	$post=	$_POST['post'];

	include 'conn.php';

	$sql = "UPDATE tb_posts SET 
	post = '$post' WHERE id_post = $id_post";

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