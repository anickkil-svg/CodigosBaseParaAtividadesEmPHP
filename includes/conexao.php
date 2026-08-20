<?php 
	
	$host = "localhost";
	$user = "root";
	$senha = "Senac@123";
	$banco = "login";
	$porta = 3307;

	$conexao = mysqli_connect($host, $user, $senha, $banco, $porta);

	if ($conexao) {
		//echo "Deu certo a conexão!";
	} else {
		echo "Deu errado a conexão!";
	}
	

 ?>