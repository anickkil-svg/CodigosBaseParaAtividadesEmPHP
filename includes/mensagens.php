<?php 
	if (isset($_GET ['tipoMensagem'])){
		if ($_GET['tipoMensagem']=='sucesso') {
			echo "
				<div class='alert alert-success' role='alert'>
					".$_GET['mensagem']."
				</div>";
		}
		if ($_GET['tipoMensagem']=='erro') {
			echo "
				<div class='alert alert-danger' role='alert'>
					".$_GET['mensagem']."
				</div>";
		}
	 }
 ?>