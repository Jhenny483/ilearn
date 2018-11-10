<?php 


require_once 'bancoDeDados.php';

$nomeUsuario = $_POST['nomeUsuarioC'];

$dataNasc = $_POST['dataNascC'];

$sexoUsu = $_POST['sUsuarioC'];

$emailUsuario = $_POST['emailUsuarioC'];

$confEmail = $_POST['confirmarEmailC'];

$senhaUsuario = $_POST['senhaUsuarioC'];

$confSenha = $_POST['confirmarSenhaC'];


	$select = "SELECT emailUsuario FROM usuario WHERE emailUsuario ='{$emailUsuario}' ";

	$banco = new BancoDeDados();
		
	$banco->abrirConexao();
		
	$banco->executarSQL($select);

	$resultadosArr = $banco->lerResultados();

	if( $resultadosArr != $emailUsuario || $emailUsuario != $confEmail || $senhaUsuario != $confSenha){
			$insert = "INSERT INTO usuario (senhaUsuario, emailUsuario, nomeUsuario, dataNasc, sexoUsu ) VALUES ('{$senhaUsuario}' , '{$emailUsuario}' , '{$nomeUsuario}' , '{$dataNasc}' , '{$sexoUsu}' )";
		$banco->executarSQL($insert);
		echo "<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado com sucesso');window.location.href='login.html';</script>";
} else {

		echo "<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='telaCadastro.php';</script>";
	// header('Location:login.html');
	}









//	if ($arrayResultados > 0) {
//		echo "JÁ TA CADASTRADO DESGRAÇADO";
//	} else {
//		$banco->executarSQL($sql);
//		echo "VOCÊ FOI CADASTRADO";
//	}


//echo $resultado;
	
//	if($checagem == $cpf){
//		echo "erro";
//	}else{
//		$sql;
//		echo "cadastrado";
//	}


	//if ($checagem > -1 ){
	//	echo "voce esta cadastrado";
	//}else{
	//	echo "erro ao checar usuario";
	//}



//	$valorEncontrado = mysql_query($checagem);

//	if($checagem == $cpf){
//		 echo " erro, ja existente";
//	}else{
//		echo "cadastrado";
//	}



	
//	$conexao->exec($sql);
//	echo "conexão bem sucedida";

//TELA QUE FAZ O CADASTRO DO USUARIO NO BANCO DE DADOS CASO A TELA DE LOGIN APONTE QUE O EMAIL E SENHA INSERIDOS SAO INVALIDOS

?>