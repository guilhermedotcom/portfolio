<?php  
function verificarMsg()
{
	if(empty($_GET['msg']))
	{
		return '';
	}
	else
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			$retorno = '<h3 class="alert alert-warning">
			ATENÇÃO: Preencha todos os campos do formulário
			</h3>';
		}
		else if($msg == 'edtSuccess')
		{
			$retorno = '<h3 class="alert alert-success">
			Herói editado com sucesso!
			</h3>';
		}
		else if($msg == 'edtError')
		{
			$retorno = '<h3 class="alert alert-danger">
			ATENÇÃO: Não foi possível editar o herói.<br>Tente novamente ou contate o suporte.
			</h3>';
		}
		else if($msg == 'noId')
		{
			$retorno = '<h3 class="alert alert-warning">
			ATENÇÃO: Não foi possível encontrar o herói para exclusão.
			</h3>';
		}
		else if($msg == 'delSuccess')
		{
			$retorno = '<h3 class="alert alert-success">
			Herói excluído com sucesso!
			</h3>';
		}
		else if($msg == 'delError')
		{
			$retorno = '<h3 class="alert alert-danger">
			ATENÇÃO: Não foi possível excluir o herói...
			</h3>';
		}
		elseif($msg == 'empty_fields')
		{
			$retorno = '<h3 class="alert alert-warning">
			ATENÇÃO: Preencha todos os campos do Login
			</h3>';
		}
		else
		{
			$retorno = '';
		}

		return $retorno;
	}
}




?>