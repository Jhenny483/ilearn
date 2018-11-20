<?php 
require_once 'BancoDeDados.php';

$emailC= $_POST['emailCadastro'];
$senhaC = $_POST['senhaCadastro'];
$nickC = $_POST['nickCadastro'];
$nivelC = $_POST['nivelCadastro'];
$instituicaoC = $_POST['instituicaoCadastro'];
$cursoC = $_POST['cursoCadastro'];


	$select = "SELECT * FROM usuario WHERE nicknameUsuario = '{$_POST['nickCadastro']}'";

	$select2 = "SELECT * FROM usuario WHERE emailUsuario = '{$_POST['emailCadastro']}'";

	$banco = new BancoDeDados();
		
	$banco->abrirConexao();
		
	$banco->executarSQL($select);
	$banco->executarSQL($select2);

	$resultadosArr = $banco->lerResultados();
	$res = $banco->lerResultados();




	if( $resultadosArr == true || $res == true){
		echo "<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='cadastrar.php';</script>";
	} else {
		
		session_start();
			$insert = "INSERT INTO usuario ( emailUsuario, senhaUsuario, nicknameUsuario) VALUES ('{$emailC}', '{$senhaC}', '{$nickC}')";
		$banco->executarSQL($insert);
		$resU = $banco->lerResultados();


			$insere = "INSERT INTO formacao (nomeDono, nivel, instituicao, curso) VALUES ('{$nickC}' , '{$nivelC}' , '{$instituicaoC}' , '{$cursoC}')";
		$banco->executarSQL($insere);
		
		echo "<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado com sucesso');window.location.href='login.php';</script>";
	// header('Location:login.html');
	}

	$banco->fecharConexao();









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