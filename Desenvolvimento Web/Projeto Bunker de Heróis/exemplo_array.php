<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exemplo Array</title>
	<meta charset="utf-8">
</head>
<body>

<?php 
	
	$contato['id'] 	  = 1;
	$contato['nome']  = 'João';
	$contato['idade'] = 39;
	$contato['email'] = 'joao@gmail.com';

	echo '<pre>';
	print_r($contato);
	echo '</pre>';


?>
</body>
</html>