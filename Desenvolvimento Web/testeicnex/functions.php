<?php  
//função para verificar qual o valor do parametro 'msg' enviado para algumas páginas e retornar mensagem apropriada, ou retornar uma string vazia.
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
			$retorno = '<h5 class="alert alert-success">Usuário editado com sucesso!</h5>';
		}
		elseif($msg == 'edtError')
		{
			$retorno = '<h5 class="alert alert-danger">Atenção: Não foi possível editar o usuário.<br>
			Tente novamente ou entre em contato com o suporte.</h5>';
		}
		elseif($msg == 'noId')
		{
			$retorno = '<h5 class="alert alert-warning">Atenção: Não foi possível encontrar o usuário para exclusão</h5>';
		}
		elseif($msg == 'delSuccess')
		{
			$retorno = '<h5 class="alert alert-success">Usuário excluido com sucesso!</h5>';
		}
		elseif($msg == 'delError')
		{
			$retorno = '<h5 class="alert alert-danger">Atenção: Não foi possível excluir o usuário.</h5>';
		}
		elseif($msg == 'logSuccess')
		{
			$retorno = '<h5 class="alert alert-success">Login realizado com sucesso!</h5>';
		}
		elseif($msg == 'logError')
		{
			$retorno = '<h5 class="alert alert-danger">Erro ao logar!</h5>';
		}
		elseif($msg == 'empty_fields')
		{
			$retorno = '<h5 class="alert alert-warning">Campos em branco na área de login!</h5>';
		}
		else
		{
			$retorno = '';
		}
		return $retorno;
	}
}

?>