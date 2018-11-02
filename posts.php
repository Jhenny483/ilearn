<?php 
session_start();
	require_once 'BancoDeDados.php';

	$usr = $_SESSION['cod'];

if($usr == ""){
	header('Location:login.html');
}

		$banco = new BancoDeDados();



		$sql = "SELECT * FROM publicacao INNER JOIN usuario ON idUsuarioPublicacao = idUsuario WHERE idUsuario = '{$_SESSION['cod'][0]}' ORDER BY idPublicacao DESC";
		// $busca = "SELECT textoPublicacao FROM publicacao";


		$banco->abrirConexao();
		$banco->executarSQL($sql);
		$try = $banco->lerResultados();


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
		top: 1.2%;
		</style>
	<head>
		<title></title>
	</head>
<body>
	 <div class="divUsuario">
		

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
	if($try == NULL){
		echo "<h1 style='text-align:center;'>" . "você não tem textos publicados" . "</h1>";
	}

			foreach ($try as $sucess )  {?>
					<div style="width: 1000px; height:100px; position: relative; left:16%;background-color: whitesmoke; border-bottom: 2px solid #856523;">
							

					<p> <?=$sucess['emailUsuario'];?> </p>
					<p> <?=$sucess['textoPublicacao']; ?></p>
						<button><a href="telaExcluir.php?idpub=<?= $sucess['idPublicacao']; ?>&idUsuario=<?= $sucess['idUsuario']; ?>" src="" >excluir</a></button>
				</div>
<?php } 
//TELA DE POSTS,VERIFICA TODOS OS POSTS DAQUELE USUARIO
?>
</body>
</html>

