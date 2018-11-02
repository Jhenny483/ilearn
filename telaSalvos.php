<?php 
session_start();
	
	require_once 'bancoDeDados.php';
	
	$usr = $_SESSION['cod'];

	$busca = "SELECT * FROM usuario WHERE idUsuario = '{$_SESSION['cod'][0]}'";



$banco = new BancoDeDados();
$banco->abrirConexao();
$banco->executarSQL($busca);
$result = $banco->lerResultados();


// $verifica = "SELECT idPublicacao FROM salvos WHERE idPerfil = '{_SESSION['cod']}'";
// $banco->abrirConexao();
// $banco->executarSQL($verifica);
// $r = $banco->lerResultados();
	
	if($result >-1){

	$insert = "INSERT INTO salvos (usuarioSalvo, textoSalvo, idPublicacao, idUsuarioPub, idPerfil) VALUES ('{$_GET['nomeUsu']}' , '{$_GET['textoPub']}', '{$_GET['idPub']}', '{$_GET['idUsuPub']}', '{$_SESSION['cod'][0]}')";

	$banco->abrirConexao();
	$banco->executarSQL($insert);
	$t = $banco->lerResultados();
	
	echo "<script language='javascript' type='text/javascript'>alert('Você salvou esse texto com sucesso, cheque sua area de salvos');window.location.href='telaIndex.php'</script>";
} else {
	echo 'erro';
}
//criar tabela de salvos para que eu consiga mandar os itens salvos pra pagina
?>