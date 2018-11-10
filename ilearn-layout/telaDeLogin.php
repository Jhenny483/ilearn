<?php
require_once 'bancoDeDados.php';


$login = $_POST['login'];
$senha = $_POST['senha'];

$sqli = "SELECT * FROM usuario WHERE emailUsuario = '{$login}' and senhaUsuario = '{$senha}'";

$SELECT = "SELECT * FROM usuario WHERE emailUsuario = '{$login}' and senhaUsuario = '{$senha}'";

$banco = new BancoDeDados();
$banco->abrirConexao();
	
$banco->executarSQL($sqli);
$resultadosArr = $banco -> lerResultados();
// var_dump($resultadosArr);

 


if($resultadosArr == true ){
	$banco->executarSQL($SELECT);
	$cod = $banco->lerResultados();

	session_start();
	$_SESSION['cod'] = $cod[0];
	header('Location:index.php');
		
		}else{
	
	echo"<script language='javascript' type='text/javascript'>alert('login ou senha invalidos');window.location.href='login.html';</script>";

}




//TELA DE LOGIN, VERIFICA O EMAIL E SENHA INFORMADOS PELO USUARIO, CHECA NO BANCO E REDIRECIONA PRA INDEX CASO HAJA USUARIO COM ESSE EMAIL E SENHA, CASO CONTRARIO ELE SERA REDIRECIONADO PRA TELA DE CADASTRO
?>
<!--caso eu queira alertar que ele esta logado ou qualquer coisa do tipo
-->

