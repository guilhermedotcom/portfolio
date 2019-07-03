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
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Preencha todos os campos.
			</h6>';
		}
		else if($msg == 'cadmSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Cadastro realizado com sucesso!
			</h6>';
		}
		else if($msg == 'postSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Post realizado com sucesso!
			</h6>';
		}
		else if($msg == 'pedtSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Post editado com sucesso!
			</h6>';
		}
		else if($msg == 'cedtSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Comentário editado com sucesso!
			</h6>';
		}
		else if($msg == 'pedtError')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Não foi possível editar o post.<br>Tente novamente ou contate o suporte.
			</h6>';
		}
		else if($msg == 'cedtError')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Não foi possível editar o comentário.<br>Tente novamente ou contate o suporte.
			</h6>';
		}
		else if($msg == 'pnoId')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Não foi possível encontrar o post para exclusão.
			</h6>';
		}
		else if($msg == 'noId')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Não foi possível encontrar o membro para exclusão.
			</h6>';
		}
		else if($msg == 'cnoId')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Não foi possível encontrar o comentário para exclusão.
			</h6>';
		}
		else if($msg == 'pdelSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Post excluído com sucesso!
			</h6>';
		}
		else if($msg == 'cdelSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Comentário excluído com sucesso!
			</h6>';
		}
		else if($msg == 'mdelSuccess')
		{
			$retorno = '<h6 class="alert alert-info">
			Membro excluído com sucesso!
			</h6>';
		}
		else if($msg == 'pdelError')
		{
			$retorno = '<h6 class="alert alert-danger">
			ATENÇÃO: Não foi possível excluir o post...
			</h6>';
		}
		else if($msg == 'mdelError')
		{
			$retorno = '<h6 class="alert alert-danger">
			ATENÇÃO: Não foi possível excluir o membro...
			</h6>';
		}
		else if($msg == 'cdelError')
		{
			$retorno = '<h6 class="alert alert-danger">
			ATENÇÃO: Não foi possível excluir o comentário...
			</h6>';
		}
		elseif($msg == 'empty_fields')
		{
			$retorno = '<h6 class="alert alert-info">
			ATENÇÃO: Preencha todos os campos do Login
			</h6>';
		}
		else
		{
			$retorno = '';
		}

		return $retorno;
	}
}




?>