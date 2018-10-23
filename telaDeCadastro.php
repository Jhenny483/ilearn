<?php 
require_once 'BancoDeDados.php';

$loginC= $_POST['loginCadastro'];
$senhaC = $_POST['senhaCadastro'];
$cpfC = $_POST['cpfCadastro'];


	$select = "SELECT * FROM usuario WHERE cpfUsuario = '{$_POST['cpfCadastro']}'";

	$banco = new BancoDeDados();
		
	$banco->abrirConexao();
		
	$banco->executarSQL($select);

	$resultadosArr = $banco->lerResultados();


	if( $resultadosArr == true){
		echo "<script language='javascript' type='text/javascript'>alert('Esse login ja existe');window.location.href='cadastro.html';</script>";
	} else {
			$insert = "INSERT INTO usuario ( emailUsuario, senhaUsuario, cpfUsuario) VALUES ('{$loginC}', '{$senhaC}', '{$cpfC}')";
		session_start();
		$banco->executarSQL($insert);
		echo "<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado com sucesso');window.location.href='login.html';</script>";
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