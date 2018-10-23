<?php 
session_start();
	require_once 'bancoDeDados.php';
	$usr = $_SESSION['cod'];

		$sql = "SELECT * FROM salvos WHERE idSalvo = '{$_GET['idsalvo']}'";
			$banco = new BancoDeDados();
			$banco->abrirConexao();
			$banco->executarSQL($sql);
			$res = $banco->lerResultados();

	if($res > -1){
		$del = "DELETE FROM salvos WHERE idSalvo = '{$_GET['idsalvo']}'";

			$banco->abrirConexao();
			$banco->executarSQL($del);


	echo "<script language='javascript' type='text/javascript'>alert('texto removido');window.location.href='telaConsultaSalvos.php';</script>";
	} else {
			echo "<script language='javascript' type='text/javascript'>alert('nao foi possivel remover o texto')window.location.href='telaConsultaSalvos.php';</script>";
	}