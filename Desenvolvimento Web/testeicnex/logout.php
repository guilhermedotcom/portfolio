<?php session_start();  
unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['senha']);
unset($_SESSION['email']);
session_destroy();
header('location:login.php');
?>