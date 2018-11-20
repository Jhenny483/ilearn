<?php
include 'superior.php';

require_once 'bancoDeDados.php';


if($usr == ""){
	header('Location:login.html');
}
	if(!isset($_GET['pesquisa'])){
		header('Location:index.php');
	}


$pesquisa = $_GET['pesquisa'];

	if(! $pesquisa == ""){

		$sql = "SELECT emailUsuario, idUsuario, nicknameUsuario FROM usuario WHERE nicknameUsuario LIKE '%".$pesquisa."%'";


		$banco = new BancoDeDados();
		$banco->abrirConexao();
		$banco->executarSQL($sql);
		$resPesquisa = $banco->lerResultados();

		// var_dump($resPesquisa); 
	}

?>

<html lang="pt-br">

<head>
</head>

<body>

        <main class="page-content">
<?php
        foreach ($resPesquisa as $res) { ?>

               
             <div class="card testePTColorgray ">
                    <div class="mensagem">
                        <a href="perfilOutroUsuario.php?idUsu=<?=$res['idUsuario'];?>" src="">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto"><?= $res['nicknameUsuario'] ?></p>
                            </div></a>
                            <a href="telaSeguirSQL.php?idUsuario=<?=$res['idUsuario'];?> &nomeUsuario=<?=$res['nicknameUsuario'];?>" src="">
                        <button class="btn btn-primary botao">seguir</button></a>
                        
                    </div>
                </div>
<?php } ?>
</main>
</body>

</html>