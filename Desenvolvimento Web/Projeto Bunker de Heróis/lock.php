<?php  session_start();
if(empty($_SESSION)) { 
	header('location:login.php?msg=access_denied'); }
?>