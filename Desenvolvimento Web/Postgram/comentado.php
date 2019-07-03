<?php  
session_start();
include 'functions.php';
	echo verificarMsg();

if(empty($_POST['comment']))
  
{
	header('location:gerenciar.php?msg=emptyFields');
}
else
{
	$comment= $_POST['comment'];
	$id_post= $_POST['id_post'];
	$id_user= $_SESSION['id_user'];

	include 'conn.php';

	$sql = "INSERT INTO tb_comments (id_post, id_user, comment)
		 		VALUES ('$id_post', '$id_user', '$comment')";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:comentar.php?id_post='.$id_post);
	}
	else
	{
		header('location:gerenciar.php?msg=edtError');
	}
}

?>