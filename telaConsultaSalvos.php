<?php 
session_start();
	require_once 'bancoDeDados.php';
	$usr = $_SESSION['cod'];

		if($usr == ""){
			header('Location:login.html');
		}
		$banco = new BancoDeDados();


					$busca = "SELECT * FROM salvos WHERE idPerfil = '{$_SESSION['cod'][0]}' ORDER BY idSalvo DESC";
			
			$banco->abrirConexao();
			$banco->executarSQL($busca);
			$consulta =	$banco->lerResultados();
			

	
		if ($consulta == NULL) {
			echo "<h1 style='text-align:center;'>" . "Voce nao possui textos salvos" . "</h1>";
		} else {
			echo "<h1 style='text-align:center;'>" . "Seus textos" . "</h1>";
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
		top: 1.2%; 
	}
</style>
<head>
	<title>salvos</title>
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

				foreach ($consulta as $save) {?>
					<div style="width: 1000px; height:100px; position: relative; left:16%; background-color: whitesmoke; border-bottom: 2px solid #856523;">
					 
				  		<p> <?= $save['usuarioSalvo'];?></p>
				 		<p> <?=$save['textoSalvo'];?> </p>
				

				 		<button><a href="telaRemoverSalvos.php?idsalvo=<?=$save['idSalvo'];?>" src="">remover</a>
				 		</button>
				 </div>
				 <?php }


 ?> 
		
</body>
</html>