<?php 
session_start();
require_once 'bancoDeDados.php';
$banco = new BancoDeDados();
$usr = $_SESSION['cod'];


if($usr == ""){
	header('Location:login.html');
}

$comentario = $_GET['comentario'];
$id = $_GET['idPub'];
$id2 = $_GET['idUsu'];

$consultaComentarios = "SELECT * FROM comentario WHERE idComentador = '{$_SESSION['cod'][0]}'";

$abrirconsulta = "SELECT * from usuario WHERE idUsuario = '{$id2}'";


$banco->abrirConexao();
$banco->executarSQL($consultaComentarios);
$consulta = $banco->lerResultados();


if($consulta > - 1){
	
	 $insere = "INSERT INTO comentario (idComentador, comentarioPublicado, idPublicacaoComentada) VALUES ('{$_SESSION['cod'][0]}', '{$comentario}' , '{$id}')";

	$banco->abrirConexao();
$banco->executarSQL($abrirconsulta);
	$banco->executarSQL($insere);
$res = $banco->lerResultados();
	foreach ($res as $usu) {
		$usu['idUsuario'];
	}

// header ("Location: perfilOutroUsuario.php?idUsu=".$_GET['idUsuDono'] );
	echo "<script language='javascript' type='text/javascript'>alert('comentario publicado!'); window.location.href='perfil.php'; </script>";
// echo("<script>location.href=perfilOutroUsuario.php?var=$id->id</script>");

} else {

	// echo "<script language= 'javascript' type='text/javascript'>alert('nao foi possivel publicar o comentario'); window.location.href='telaIndex.php';</script>";
}




?>