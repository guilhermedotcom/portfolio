<?php
// Constantes de conexão.
define('SERVER', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DB', 'bd_agenda');

// conectar> neste servidor, com esse usuário, esta senha, neste banco de dados.
$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);

?>