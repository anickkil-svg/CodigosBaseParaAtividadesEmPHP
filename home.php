<?php 

	include_once("includes/conexao.php");
	if (!isset($_SESSION['iUsuarioLogado'])) {
		header("Location: index.php?tipoMensagem=erro&mensagem=VocÊ precisa estar logado!");
		exit();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet">
</head>
<body class="bg-light p-4">
	<div class="container">
		<?php include_once("includes/mensagem.php"); ?>
		<div class="card p-4 shadow-sm">
			<h2>Bem-Vindo à Home!</h2>
			<p>Você está autenticado no sistema.</p>
			<div>
				<a href="includes/sair.php" class="btn btn-danger">sair</a>
			</div>
		</div>
	</div>

</body>
</html>
