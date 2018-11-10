<?php 
include 'superior.php';
	require_once 'bancoDeDados.php';
	$usr = $_SESSION['cod'];

	if($usr == ""){
		header('Location:login.html');
	}

		$idSeguido = $_GET['idUsuario'];
		$nomeUsu = $_GET['nomeUsuario'];

			$sql = "SELECT idSeguido, idSeguidor FROM seguidor WHERE seguidor.idSeguido = '{$idSeguido}' AND seguidor.idSeguidor = '{$_SESSION['cod'][0]}'";

			// $sql2 = "SELECT idSeguidor FROM seguidor WHERE seguidor.idSeguidor = '{$_SESSION['cod'][0]}'";

		$banco = new BancoDeDados();
		$banco->abrirConexao();
		
		$banco->executarSQL($sql);
		$res = $banco->lerResultados();
		
		// $banco->executarSQL($sql2);
		// $res2 = $banco->lerResultados();
// var_dump($);
// var_dump($res2);
// var_dump($idSeguido);

		if( $res == TRUE){
		
			echo "<script language='javascript' type='text/javascript'>alert('Você já segue $nomeUsu');window.location.href='index.php';</script>";
		
		} else {
		
			$insert = "INSERT INTO seguidor (idSeguido, idSeguidor) VALUES ('{$idSeguido}' , '{$_SESSION['cod'][0]}')";
				$banco->executarSQL($insert);
			echo "<script language='javascript' type='text/javascript'>alert('Você seguiu $nomeUsu');window.location.href='index.php';</script>";
		
		}

// Notice: Undefined index: idUsu in C:\Xampp\htdocs\ilearn\perfilOutroUsuario.php on line 195
?>
