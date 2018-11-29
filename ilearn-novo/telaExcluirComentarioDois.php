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
		$delete = "DELETE FROM comentario WHERE idComentario = '{$_GET['idCom']}'";
		$banco->abrirConexao();
		$banco->executarSQL($delete);
		header('Location:post.php?idPub=' . $_GET['idpub']);
// echo "<script language='javascript' type='text/javascript'>alert('comentario removido');window.location.href='post.php?idpub='.{$_GET['idpub']}.';</script>";
}


//if(isset($_GET['idpub'])) {
//	$idpub = $_GET['idpub'];
//	echo $idpub;

//	header('location: posts.php');
//}else {
//	echo "CADE O ID";
//}

