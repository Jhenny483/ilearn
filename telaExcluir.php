<?php
session_start();
require_once 'bancoDeDados.php';
	
	$banco = new BancoDeDados();

	$usr = $_SESSION['cod'];

	$select = "SELECT * FROM usuario INNER JOIN publicacao ON usuario.idUsuario = publicacao.idUsuarioPublicacao WHERE publicacao.idPublicacao = '{$_GET['idpub']}'";

	$banco->abrirConexao();
	$banco->executarSQL($select);
	$res = $banco->lerResultados();


if($res > -1) {
		$delete = "DELETE FROM publicacao WHERE idPublicacao = '{$_GET['idpub']}'";
		$banco->abrirConexao();
		$banco->executarSQL($delete);
		header('Location: posts.php');
} else {
		echo 'erro';
}


//if(isset($_GET['idpub'])) {
//	$idpub = $_GET['idpub'];
//	echo $idpub;

//	header('location: posts.php');
//}else {
//	echo "CADE O ID";
//}