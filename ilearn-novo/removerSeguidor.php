<?php 
	session_start();
	require_once 'bancoDeDados.php';
	$usr = $_SESSION['cod'][0];

$id = $_GET['idUsu'];

	$BUSCA = "SELECT idSeguido, idSeguidor FROM seguidor WHERE idSeguidor = '{$_SESSION['cod'][0]}' AND idSeguido = '{$id}'";
	$banco = new BancoDeDados();
	$banco->abrirConexao();
	$banco->executarSQL($BUSCA);
	$res = $banco->lerResultados();
	
if($res >-1 ) {
	
 $query = "DELETE FROM seguidor WHERE idSeguido ='{$id}' AND  idSeguidor = '{$_SESSION['cod'][0]}'";
$banco->executarSQL($query);

header('Location:perfilOutroUsuario.php?idUsu=' . $_GET['idUsu']);
} else {
	
	echo "erro";
}
?>