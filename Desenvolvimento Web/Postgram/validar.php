<?php
include 'functions.php';
	echo verificarMsg(); 
if (empty($_POST['username']) || 
	empty($_POST['password'])) {
	header('location:gerenciar.php?msg=empty_fields');
	
}
else
{

	$username = $_POST['username'];
	$password = $_POST['password'];

	include 'conn.php';

	$sql = "SELECT id_user, username, password, email 
	FROM tb_users 
	WHERE username = '$username' 
	AND password = '$password'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn))
	{
		$row = mysqli_fetch_assoc($result);
		
		session_start();
		
		$_SESSION['id_user']  = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['email'] 	  = $row['email'];
		
		header('location:index.php');
	}else{
		header('location:cad_user.php?msg=error_login');
	}
}
?>