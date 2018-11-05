<?php 
session_start();
require_once 'bancoDeDados.php';
$banco = new BancoDeDados();
$usr = $_SESSION['cod'];


if($usr == ""){
	header('Location:login.html');
}

$comentario = $_POST['comentario'];

$id = $_POST['idPub'];


$consultaComentarios = "SELECT * FROM comentario WHERE idComentador = '{$_SESSION['cod'][0]}'";

$banco->abrirConexao();
$banco->executarSQL($consultaComentarios);
$consulta = $banco->lerResultados();


if($consulta > - 1){
	
	 $insere = "INSERT INTO comentario (idComentador, comentarioPublicado, idPublicacaoComentada) VALUES ('{$_SESSION['cod'][0]}', '{$comentario}' , '{$id}')";


	$banco->abrirConexao();
	$banco->executarSQL($insere);

	echo "<script language='javascript' type='text/javascript'>alert('comentario publicado!'); window.location.href='perfil.php'; </script>";

} else {

	// echo "<script language= 'javascript' type='text/javascript'>alert('nao foi possivel publicar o comentario'); window.location.href='telaIndex.php';</script>";
}




?>