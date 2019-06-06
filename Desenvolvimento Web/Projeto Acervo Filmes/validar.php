<?php  

if (empty($_POST['username']) || empty($_POST['password']))
{
	header('location:login.php?msg=empty_fields');
}
else
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	include 'conn.php';

	$sql = "SELECT id_user, username, password, email FROM tb_users WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn))
	{
		$row = mysqli_fetch_assoc($result);
		//iniciar a sessão
		session_start();
		//registrar as variaveis de sessão
		$_SESSION['id_user'] = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['email'] = $row['email'];
		//redirecionar para a página restrita
		header('location:index.php?msg=logSuccess');
	}
	else
	{
		header('location:login.php?msg=logError');
	}
}

?>