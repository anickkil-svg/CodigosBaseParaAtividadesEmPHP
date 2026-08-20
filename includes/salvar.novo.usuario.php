<?php
	
	include_once("conexao.php");

	if ($_POST) {
		
		$nome =  $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cadastro = date("Y-m-d H:i:s");
		$cpf = $_POST['cpf'];
		$dataNasc = $_POST['dataNasc'];

		$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

		$sql = "INSERT INTO usuarios (nome, email, senha, cadastro, cpf, dataNasc)
				VALUES ('$nome', '$email', '$senhaHash', '$cadastro', '$cpf', '$dataNasc')";

		if(mysqli_query($conexao, $sql)){
			header("Location: ../index.php?tipoMensagem=sucesso&mensagem=Cadastro efetuado com sucesso!");
		} else {
			header("Location: ../index.php?tipoMensagem=erro&mensagem=Erro ao cadastrar!");
		}


	}

?>