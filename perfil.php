<?php
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){
	header('Location:login.html');
}


?>
<!DOCTYPE html>
<html>
<style type="text/css">
.divUsuario{
		background-color: whitesmoke;
		width: 15%;
		height: 100%;
		position: absolute;
		left: 0%; 
	}
</style>
<head>
	<title>perfil</title>
</head>
<body><div class="divUsuario">
		

		<p>olá, <?= $usr['emailUsuario'] ?> </p>

		<label><a name="" href ="index.php" src="">home</a></label>
			<br>
		<label><a name="" href ="posts.php" src="">visualizar publicações</a></label>
			<br>
		<label class="config"><a href="telaConfig.php" src="">Configurações </a> </label>
			<br>
		<label><a href="perfil.php" src="">perfil</a></label>
			<br>
		<label><a href="telaConsultaSalvos.php">salvos</a></label>
			<br>
		<label><a href="logOut.php" src="">sair</a></label>
	</div>
	
<?php

$banco = new BancoDeDados();

$usuario = "SELECT * FROM usuario";

$banco->abrirConexao();
$banco->executarSQL($usuario);
$resPesquisa = $banco->lerResultados();

?>

</body>
</html>