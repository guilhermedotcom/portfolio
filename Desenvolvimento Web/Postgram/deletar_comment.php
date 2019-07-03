<?php
include 'functions.php';
    echo verificarMsg();
session_start();
if(empty($_GET['id_comment'])) 
{

    header('location:gerenciar.php?msg=cnoId');
}
else
{
    $id_comment= $_GET['id_comment'];
    $id_user=$_SESSION['id_user'];

    include 'conn.php';

    $sql = "DELETE FROM tb_comments WHERE id_comment = $id_comment";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {

        header('location:exibir.php?msg=cdelSuccess');
    }
    else
    {

        header('location:index.php?msg=cdelError');
    }
}
?>