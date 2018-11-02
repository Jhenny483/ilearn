<?php
session_start();
require_once 'BancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){

	header('Location:login.html');
}

?>


<!DOCTYPE html>
		<meta charset="utf-8">
<html>

<style type="text/css">
	
	.divUsuario{
		background-color: whitesmoke;
		width: 15%;
		height: 100%;
		position: absolute;
		left: 0%; 
	}
	.formulario{
		position: relative;
		left:16%;
	}

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
	<input type="text" name="pesquisa" style="position: relative; left: 600px; width: 300px;">

<div class="formulario">
	<form action="telaPublicacao.php" method="POST">
		<textarea name="textoPublicacao" style="width: 200px; height: 50px;"></textarea><br/>
		<input type="submit" name="enviar">
	</form>
	
<?php	
$banco = new BancoDeDados(); 

		$texto = "SELECT * FROM publicacao INNER JOIN usuario ON publicacao.idUsuarioPublicacao = usuario.idUsuario ORDER BY idPublicacao DESC";

		$coment = "SELECT * FROM comentario INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao ";

$banco->abrirConexao();
$banco->executarSQL($texto);
$publicacoes = $banco->lerResultados();

// $banco->executarSQL($coment);
// $res = $banco->lerResultados();

//TELA INDEX OU TELA PRINCIPAL, TIMELINE. ELE ENTRA AQUI SE O EMAIL E SENHA ESTIVEREM CERTOS
?>

<?php

		foreach ($publicacoes as $pub) { ?>
			<div style="width: 1000px; height:flex; background-color: whitesmoke;border-bottom: 2px solid #000000;margin-bottom: 10px;" class="linhaDoTempo">
							
				<br>
				<a href="perfilOutroUsuario.php?idUsu=<?=$pub['idUsuario'];?>&idPub=<?=$pub['idPublicacao'];?>" src=""> 
					<label><?= $pub['emailUsuario'] ?></label></a>
		 			<p><?= $pub['textoPublicacao']; ?></p>
		 					
		 						<button style="position: relative;left: 900px;top: -70px;">
		 						<a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src=""> salvar </a>
		 					</button>
								<?php
								$coment = "SELECT idComentario,comentarioPublicado, emailUsuario FROM comentario 
								INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
								INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$pub['idPublicacao']} ORDER BY idComentario ASC"; 
								
								$banco->executarSQL($coment);
								
									$arrayComentarios = $banco->lerResultados();
										foreach ($arrayComentarios as $comentario) { ?>
												<div style="width: 1000px; height:flex; background-color: whitesmoke;border-top: 2px solid #000000;" class="linhaDoTempo">
											
											<p> <?= $comentario['emailUsuario'];?> </p>
											<p> <?=$comentario['comentarioPublicado'];?></p>
									
									</div>
								 
								 <?php } ?>
								
		 							<form action="telaComentario.php" method="POST">
		 									<input type="hidden" name="idPub" value="<?=$pub['idPublicacao'];?>">
		 									<input type="text" name="comentario">
		 								<button>enviar</button>
		 							</form>

</div>
					 			
<?php }	 
?>



<?php
	


?>				 	

</body>
</html>