<?php
include 'functions.php';
	echo verificarMsg(); 


if(empty($_POST['username'])  ||
   empty($_POST['password']) ||
   empty($_POST['email']) ||
   empty($_POST['id_user']))
{
	header('location:perfil.php?msg=emptyFields');
}
else
{
	$id_user	= $_POST['id_user'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email	= $_POST['email'];

	include 'conn.php';

	$sql = "UPDATE tb_users SET 
	username = '$username', password = '$password', 
	email = '$email' WHERE id_user = $id_user";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:perfil.php?msg=edtSuccess');
	}
	else
	{
		header('location:perfil.php?msg=edtError');
	}
}

?>