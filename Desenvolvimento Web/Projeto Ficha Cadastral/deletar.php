<?php  

if(!empty($_GET['id']))
{
	$id = $_GET['id'];

	include 'conn.php';

	$sql = "DELETE FROM tb_contatos WHERE id = $id";

	$result = mysqli_query($conn, $sql);
}

// redirecionar para gerenciar.php
header('location:gerenciar.php');

?>