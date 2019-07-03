<?php
include 'functions.php';
    echo verificarMsg();
session_start();
if(empty($_SESSION['id_user']))
{

    header('location:perfil.php?msg=noId');
}
else
{
    $id_user = $_SESSION['id_user'];

    include 'conn.php';

    $sql = "DELETE FROM tb_users WHERE id_user = $id_user";

    $result = mysqli_query($conn, $sql);
    unset($_SESSION['id_user']);
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['email']);
    session_destroy();
    header('location:login.php');
        

}

?>
<?php
session_start();
if(empty($_GET['id_post'])) 
{

    header('location:gerenciar.php?msg=noId');
}
else
{
    $id_post= $_GET['id_post'];
    $id_userfk=$_SESSION['id_userfk'];

    include 'conn.php';

    $sql = "DELETE FROM tb_posts WHERE id_userfk = $id_post";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {

        header('location:gerenciar.php?msg=mdelSuccess');
    }
    else
    {

        header('location:index.php?msg=mdelError');
    }
}
?>

<?php
session_start();
if(empty($_GET['id_comment'])) 
{

    header('location:gerenciar.php?msg=noId');
}
else
{
    $id_post= $_GET['id_comment'];
    $id_user=$_SESSION['id_user'];

    include 'conn.php';

    $sql = "DELETE FROM tb_comments WHERE id_user = $id_comment";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {

        header('location:gerenciar.php?msg=mdelSuccess');
    }
    else
    {

        header('location:index.php?msg=mdelError');
    }
}
?>

