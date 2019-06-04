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

		if ($msg == 'emptyFields')
		{
			$retorno = '<h5 class="alert alert-warning">Atenção: Preencha todos os campos do formulário</h5>';
		}
		elseif($msg == 'edtSuccess')
		{
			$retorno = '<h5 class="alert alert-success">Filme editado com sucesso!</h5>';
		}
		elseif($msg == 'edtError')
		{
			$retorno = '<h5 class="alert alert-danger">Atenção: Não foi possível editar o filme.<br>
			Tente novamente ou entre em contato com o suporte.</h5>';
		}
		elseif($msg == 'noId')
		{
			$retorno = '<h5 class="alert alert-warning">Atenção: Não foi possível encontrar o filme para exclusão</h5>';
		}
		elseif($msg == 'delSuccess')
		{
			$retorno = '<h5 class="alert alert-success">Filme excluido com sucesso!</h5>';
		}
		elseif($msg == 'delError')
		{
			$retorno = '<h5 class="alert alert-danger">Atenção: Não foi possível excluir o filme.</h5>';
		}
		else
		{
			$retorno = '';
		}
		return $retorno;
	}
}

?>