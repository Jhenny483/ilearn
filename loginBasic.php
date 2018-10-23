<?php
include "banco.php";


//$bancoTry = mysqli_connect('127.0.0.1', 'host', '');
//if( ! $bancoTry){
//	die('conexão falhou' .mysql_error());
//}else{
//	echo "conexão bem sucedida";
//}
//mysql_close($bancoTry);

//$insert = "insert into usuario VALUES ('$login','$senha')";

//if( ! mysql_query($insert)){
//	echo "erro again" ;
//}else{
//echo "prossiga";
//};


mysql_query($conexao, $sql);

echo "seu cadastro foi efetuado";

//$select = "select idUsuario where emailUsuario = '$login' and senhaUsuario='$senha'";

//if( $conexao . $select === TRUE ){
//	global $result;

//	$result = $select;

//	echo $result . 'cadastrado';
//}



?> 
