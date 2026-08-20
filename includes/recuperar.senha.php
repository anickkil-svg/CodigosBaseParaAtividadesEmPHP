<?php 

	include_once("conexao.php");

	if ($_POST) {

		$email = mysqli_real_escape_string		($conexao, $_POST['email']);
		$dataNasc = mysqli_real_escape_string	($conexao, $_POST['dataNasc']);
		$cpf = mysqli_real_escape_string		($conexao, $_POST['cpf']);
		$senha = mysqli_real_escape_string		($conexao, $_POST['senha']);

		// 1. Verifica se existe usuário com o e-mail, data de nascimento e CPF informados
		echo $sqlBusca = "SELECT id_usuario FROM usuarios WHERE email = '{$email}' AND dataNasc = '{$dataNasc}' AND cpf = '{$cpf}'";
		$resultado = mysqli_query($conexao, $sqlBusca);

		if ($resultado && mysqli_num_rows($resultado) > 0) {
			
			// 2. Se encontrou o usuário, gera o hash e atualiza a senha no banco
			$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
			$sqlAtualiza = "UPDATE usuarios SET senha = '{$senhaHash}' WHERE email = '{$email}'";

			if (mysqli_query($conexao, $sqlAtualiza)) {
				header("Location: ../index.php?tipoMensagem=sucesso&mensagem=Senha alterada com sucesso!");
				exit();
			} else {
				header("Location: ../recuperar.php?tipoMensagem=erro&mensagem=Erro ao atualizar no banco de dados!");
				exit();
			}

		} else {
			header("Location: ../recuperar.php?tipoMensagem=erro&mensagem=Dados incorretos ou usuário não encontrado!");
			exit();
		}

	}

?>



