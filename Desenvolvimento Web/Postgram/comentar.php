<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Comentar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="text-center">
<br>
<div>
    <img src="postgrammini.jpg" class="rounded mx-auto d-block">
</div><br>

<?php
include 'menu.php';
include 'functions.php';
    echo verificarMsg();
$form = false; 
if(empty($_GET['id_post']))
{
    header('location:exibir.php?msg=noId');
}
else
{
    $id_post= $_GET['id_post'];

    include 'conn.php';

    $sql = "SELECT post, id_post FROM tb_posts WHERE id_post = $id_post";

    $result = mysqli_query($conn, $sql);

    $form = true;

    if(mysqli_affected_rows($conn) > 0)
    {
        $exibirpost = mysqli_fetch_assoc($result);
        $form = true;
    }
    else
    {

        header('location:index.php?msg=404Error');
    }
}
if ($form == true) {

    ?>
    <form action="comentado.php" method="post">
        
        <h5 class="bg-danger text-white text-center">Comentar Post:</h5>
        <input type="hidden" name="id_post" value="<?php echo $id_post ?>">
        <p>
            <label>Post:</label><br>
            <textarea class="form-control" type="text" name="post" readonly ><?php echo $exibirpost['post'] ?></textarea>
        </p>

        <input type="hidden" name="id_post" 
        value="<?php echo $id_post ?>">

        <label>Comentário:</label><br>
        <textarea class="form-control" type="text" name="comment" placeholder="O que você pensa sobre isso?"></textarea><br>

        <button type="submit" class="btn btn-info">Salvar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>

    </form><br>
<div class="text-center"><h5 class="text-white bg-info">Comentários anteriores:</h5><br>
    <h5 class="text-danger">Usuário/Comentário</h5>
    <h6>
   <?php

    $sqlc = "   SELECT  c.comment, 
                        c.date_time,
                        c.iduserfk,
                        u.username
                FROM tb_comments AS c
                INNER JOIN tb_users AS u
                ON c.id_user = u.id_user
                WHERE c.id_post = $id_post";
    $resultc = mysqli_query($conn, $sqlc);

    while( $comments = mysqli_fetch_assoc($resultc)){
        echo $comments['username']." : ".$comments['comment']."  <b>Data/Horário:</b> ".date("d/m/Y H:i:s", strtotime($comments['date_time'])). "<br><br>";
    }


}

?>
</h6></div>

</body>
</html>