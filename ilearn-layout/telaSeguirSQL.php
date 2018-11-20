<?php 
session_start();
	require_once 'bancoDeDados.php';
	$usr = $_SESSION['cod'];

	if($usr == ""){
		header('Location:login.html');
	}

		$idSeguido = $_GET['idUsuario'];
		$nomeUsu = $_GET['nomeUsuario'];

			$sql = "SELECT idSeguido, idSeguidor FROM seguidor WHERE seguidor.idSeguido = '{$idSeguido}' AND seguidor.idSeguidor = '{$_SESSION['cod'][0]}'";

			$sql2 = "SELECT nicknameUsuario FROM usuario WHERE idUsuario = '{$_SESSION['cod'][0]}'";

		$banco = new BancoDeDados();
		$banco->abrirConexao();
		
		$banco->executarSQL($sql);
		$res = $banco->lerResultados();
		
		$banco->executarSQL($sql2);
		$res2 = $banco->lerResultados();
		foreach ($res2 as $k) {
			$k['nicknameUsuario'];
		}
// var_dump($);
// var_dump($res2);
// var_dump($idSeguido);

		if( $res == TRUE){
		
			echo "<script language='javascript' type='text/javascript'>alert('Você já segue $nomeUsu');window.location.href='index.php';</script>";
		
		} else {
		
			$insert = "INSERT INTO seguidor (idSeguido, idSeguidor, nicknameSeguido, nicknameSeguidor) VALUES ('{$idSeguido}' , '{$_SESSION['cod'][0]}', '{$nomeUsu}' , '{$k['nicknameUsuario']}')";
				$banco->executarSQL($insert);
			echo "<script language='javascript' type='text/javascript'>alert('Você seguiu $nomeUsu');window.location.href='index.php';</script>";
		
		}

// Notice: Undefined index: idUsu in C:\Xampp\htdocs\ilearn\perfilOutroUsuario.php on line 195
?>
