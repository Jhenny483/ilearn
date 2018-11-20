<?php 
session_start();

require_once 'bancoDeDados.php';
//require_once 'loginUsuario.php';

$usr = $_SESSION['cod'];

if($usr == ""){
	header('Location:login.html');
}

$textoPublicacao = $_POST['textoPublicacao'];

$select = "SELECT * FROM publicacao WHERE idUsuarioPublicacao = {$_SESSION['cod']}";

$inserePublicacao = "INSERT INTO publicacao (idUsuarioPublicacao ,textoPublicacao) VALUES ('{$usr['idUsuario']}' ,'{$textoPublicacao}')";

$banco = new BancoDeDados();

$banco->abrirConexao();
$banco->executarSQL($select);

$arrayPostagem = $banco->lerResultados();


if($arrayPostagem  > 0 ){

	$banco->executarSQL($inserePublicacao);
	header('Location:index.php');
} else {
	echo 'erro';
}

//TELA DE PUBLICACAO PEGA O QUE O USUARIO LOGADO ESCREVEU, E INSERE NO BANCO DE DADOS COM AS INFORMACOES DELE, EMAIL E SENHA
?>
<!-- 
$select = "SELECT idUsuario FROM usuario INNER JOIN publicacao on idUsuario = idPublicacao" ;

$banco = new BancoDeDados();

$banco->abrirConexao();
$banco->executarSQL($select);
$arrayPostagem = $banco->lerResultados();

if($arrayPostagem > -1){
session_start();
$_SESSION['id'] = $arrayPostagem;
return $_SESSION;

$banco->executarSQL($inserePublicacao);
$banco->lerResultados();
echo "tudo joia";
} else {
	session_destroy();
	echo "tudo errado";
}-->
?>