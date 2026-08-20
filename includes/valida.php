<?php
	
	include_once("conexao.php");

	if($_POST){

		$email = mysqli_escape_string($conexao, $_POST['email']);
		$senha = mysqli_escape_string($conexao, $_POST['senha']);

		$sql = "SELECT senha FROM usuarios WHERE email = '{$email}'";
		$resultado = mysqli_query($conexao, $sql);
		$dados = mysqli_fetch_assoc($resultado);

		if (isset($dados['senha'])) {

			if (password_verify($senha, $dados['senha'])) {
				echo 'Login permitido!';
			} else {
				echo "Login e/ou senha incorretos!";
			}

		} else {
			echo "Login e/ou senha incorretos!";
		}
	}


?>