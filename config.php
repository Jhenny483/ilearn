<?php 
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod']['idUsuario'];


if($usr == ""){
	header('Location:login.html');
}
 echo 'dados alterados com sucesso';

$banco = new BancoDeDados();
$banco->abrirConexao();

$loginAlterar = trim( $_POST['loginAlterar']);
$senhaAlterar = trim( $_POST['senhaAlterar']);
$informacoesAlterar = trim( $_POST['informacoesAlterar']);

$sql = "UPDATE usuario SET ";


$arrSql = array();

if ($loginAlterar != "") {
	$arrSql[] = " emailUsuario = '{$loginAlterar}' ";
}

if ($senhaAlterar != "") {
	$arrSql[] =" senhaUsuario = '{$senhaAlterar}' ";
}

$sql .= implode(",", $arrSql);

$sql .= "WHERE idUsuario = '{$usr}'";

$banco->executarSQL($sql);
$result = $banco->lerResultados();


?>