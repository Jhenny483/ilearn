<?php 
	session_start();
	require_once 'bancoDeDados.php';
	$banco = new BancoDeDados();

	$busca = "SELECT emailUsuario, senhaUsuario FROM usuario WHERE idUsuario ='{$_SESSION['cod'][0]}'";
		$banco->abrirConexao();
		$banco->executarSQL($busca);
		$res = $banco->lerResultados();

	foreach ($res as $LS) {
		$LS['emailUsuario'];
		$LS['senhaUsuario'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>tela Config</title>
</head>
<body>
<h1>Alterar seus dados</h1>
<form action="config.php" method="post">
<input type="text" name="loginAlterar" value=" <?= $LS['emailUsuario']?> ">
<input type="password" name="senhaAlterar" value="<?= $LS['senhaUsuario']?>">
<input type="text" name="informacoesAlterar" placeholder="adicionar informações sobre você">
<input type="submit" name="enviar">
</form>
</body>
</html>