<?php
include 'functions.php';
	echo verificarMsg();  

if(empty($_POST['id_comment']) or
   empty($_POST['comment']))
{
	header('location:gerenciar.php?msg=emptyFields');
}
else
{
	$id_comment= $_POST['id_comment'];
	$comment=	$_POST['comment'];

	include 'conn.php';

	$sql = "UPDATE tb_comments SET 
	comment = '$comment' WHERE id_comment = $id_comment";

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