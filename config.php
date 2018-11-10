'<?php 
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod']['idUsuario'];


if($usr == ""){
	header('Location:login.html');
}
 echo 'dados alterados com sucesso';

$banco = new BancoDeDados();
$banco->abrirConexao();
$nomeUsuario = trim($_POST['nomeUsuario']);
$dataNasc = trim($_POST['dataNasc']);
$sexoUsu = trim($_POST['sUsuario']);
$emailUsuario = trim($_POST['emailUsuario']);
$confEmail = trim($_POST['confirmarEmail']);
$senhaUsuario = trim($_POST['senhaUsuario']);
$confSenha = trim($_POST['confirmarSenha']);

$sql = "UPDATE usuario SET ";


$arrSql = array();

if ($nomeUsuario != "") {
	$arrSql[] = " nomeUsuario = '{$nomeUsuario}' ";
}

if ($dataNasc != "") {
	$arrSql[] =" dataNasc = '{$dataNasc}' ";
}

if ($sexoUsu != "") {
	$arrSql[] =" sexoUsu = '{$sexoUsu}' ";
}

if ($emailUsuario == $confEmail) {
	if($emailUsuario != ""){
		$arrSql[] =" emailUsuario = '{$emailUsuario}' ";
	} 
} else {
	echo "<script language='javascript' type='text/javascript'>alert('email nao confere');window.location.href:'telaConfig.php';</script>";
}

if ($senhaUsuario == $confSenha) {
	if($senhaUsuario != ""){
		$arrSql[] =" senhaUsuario = '{$senhaUsuario}' ";
	} 
} else {
	echo "<script language='javascript' type='text/javascript'>alert('senha nao confere');window.location.href:'telaConfig.php';</script>";
}


$sql .= implode(",", $arrSql);

$sql .= "WHERE idUsuario = '{$usr}'";

$banco->executarSQL($sql);
$result = $banco->lerResultados();


?>