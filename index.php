<?php
<<<<<<< HEAD
session_start();
require_once 'BancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){

	header('Location:login.html');
}

?>


<!DOCTYPE html>
		<meta charset="utf-8">
<html>

<style type="text/css">
	
	.divUsuario{
		background-color: whitesmoke;
		width: 15%;
		height: 100%;
		position: absolute;
		left: 0%; 
	}
	.formulario{
		position: relative;
		left:16%;
	}

</style>
	<head>
		<title></title>		
	</head>
<body>

	<div class="divUsuario">
		

		<p>olá, <?= $usr['emailUsuario'] ?> </p>

		<label><a name="" href ="index.php" src="">home</a></label>
			<br>
		<label><a name="" href ="posts.php" src="">visualizar publicações</a></label>
			<br>
		<label class="config"><a href="telaConfig.php" src="">Configurações </a> </label>
			<br>
		<label><a href="perfil.php" src="">perfil</a></label>
			<br>
		<label><a href="telaConsultaSalvos.php">salvos</a></label>
			<br>
		<label><a href="logOut.php" src="">sair</a></label>
	</div>
	<input type="text" name="pesquisa" style="position: relative; left: 600px; width: 300px;">

<div class="formulario">
	<form action="telaPublicacao.php" method="POST">
		<textarea name="textoPublicacao" style="width: 200px; height: 50px;"></textarea><br/>
		<input type="submit" name="enviar">
	</form>
	
<?php	
$banco = new BancoDeDados(); 

		$texto = "SELECT * FROM publicacao INNER JOIN usuario ON publicacao.idUsuarioPublicacao = usuario.idUsuario ORDER BY idPublicacao DESC";

		$coment = "SELECT * FROM comentario INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao ";

$banco->abrirConexao();
$banco->executarSQL($texto);
$publicacoes = $banco->lerResultados();

// $banco->executarSQL($coment);
// $res = $banco->lerResultados();

//TELA INDEX OU TELA PRINCIPAL, TIMELINE. ELE ENTRA AQUI SE O EMAIL E SENHA ESTIVEREM CERTOS
?>

<?php

		foreach ($publicacoes as $pub) { ?>
			<div style="width: 1000px; height:flex; background-color: whitesmoke;border-bottom: 2px solid #000000;margin-bottom: 10px;" class="linhaDoTempo">
							
				<br>
				<a href="perfilOutroUsuario.php?idUsu=<?=$pub['idUsuario'];?>&idPub=<?=$pub['idPublicacao'];?>" src=""> 
					<label><?= $pub['emailUsuario'] ?></label></a>
		 			<p><?= $pub['textoPublicacao']; ?></p>
		 					
		 						<button style="position: relative;left: 900px;top: -70px;">
		 						<a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src=""> salvar </a>
		 					</button>
								<?php
								$coment = "SELECT idComentario,comentarioPublicado, emailUsuario FROM comentario 
								INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
								INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$pub['idPublicacao']} ORDER BY idComentario ASC"; 
								
								$banco->executarSQL($coment);
								
									$arrayComentarios = $banco->lerResultados();
										foreach ($arrayComentarios as $comentario) { ?>
												<div style="width: 1000px; height:flex; background-color: whitesmoke;border-top: 2px solid #000000;" class="linhaDoTempo">
											
											<p> <?= $comentario['emailUsuario'];?> </p>
											<p> <?=$comentario['comentarioPublicado'];?></p>
									
									</div>
								 
								 <?php } ?>
								
		 							<form action="telaComentario.php" method="POST">
		 									<input type="hidden" name="idPub" value="<?=$pub['idPublicacao'];?>">
		 									<input type="text" name="comentario">
		 								<button>enviar</button>
		 							</form>

</div>
					 			
<?php }	 
?>



<?php
	


?>				 	

</body>
</html>
=======
include "superior.php";
?>

        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                 <div class="row"> 
            <div class="col-sm-12 col-md-12 primary ">
                <form  method="POST" action="model/uploadPost.php" enctype="multipart/form-data" >
                    <div class="card my-4">
                        <div class="fazerPost">
                            O que há de novo
                        </div>
                        <div class="fazerPostMensagem testePTColorgray">

                            <textarea name="postDesafio" id="compartilhe" placeholder="compartilhe seu status"></textarea>
                        </div>
                        <div class="fazerPost  cinza-claro">
                            
                            <div class="fazerPostVidImg">
                                <ul>
                             

                                    <li class="fotoInserir"><i class="fas fa-image"></i></li>
                                </ul>
                                <div class="esconder">
                                
                                    <input type="file" name="inserirFoto[]" class="inserirFoto" multiple="multiple">
                         </div>
                            </div>
                            <div class="fazerPostBotao">
                                
                                <input name="SendCadImg" type="submit" value="Enviar" class="btn btn-primary float-right">
                            </div>
                            
                        </div>
                    </div>
                </form>
                <div class="card testePTColorgray my-4">
                    <div class="mensagem">
                        <a href="aluno.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto">Nome user <br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                        <img src="assets/img/banner1-1.jpg" alt="">                    </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                        <button class="btn btn-primary"><i class="fas fa-share"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                               <a href="coordenador.php"> <p class="text-preto">Nome user <br> Compartilhado em 00/00/0000
                                </p></a>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="aluno.php"> <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                                <p class="text-preto">Nome user<br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="coordenador.php">
                                <p class="text-preto">Nome user 
                                <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="respondaMensagem">
                        <div class="avatarResponda">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="text">
                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
<!--                post 2           -->
            <div class="card testePTColorgray my-4">
                    <div class="mensagem">
                        <a href="aluno.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto">Nome user <br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                        <img src="assets/img/banner2-2.jpg" alt="">                    </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                        <button class="btn btn-primary"><i class="fas fa-share"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                               <a href="coordenador.php"> <p class="text-preto">Nome user <br> Compartilhado em 00/00/0000
                                </p></a>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="aluno.php"> <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                                <p class="text-preto">Nome user<br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="coordenador.php">
                                <p class="text-preto">Nome user 
                                <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="respondaMensagem">
                        <div class="avatarResponda">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="text">
                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
<!--           post 3        -->
           
            <div class="card testePTColorgray my-4">
                    <div class="mensagem">
                        <a href="aluno.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto">Nome user <br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                        <img src="assets/img/banner3-3.jpg" alt="">                    </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                        <button class="btn btn-primary"><i class="fas fa-share"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                               <a href="coordenador.php"> <p class="text-preto">Nome user <br> Compartilhado em 00/00/0000
                                </p></a>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="aluno.php"> <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="aluno.php">
                                <p class="text-preto">Nome user<br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="coordenador.php">
                                <p class="text-preto">Nome user 
                                <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="respondaMensagem">
                        <div class="avatarResponda">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="text">
                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </div>
           
            </div>
                
                



            </div>
        </main>
        <!-- page-content" -->

<?php
include "inferior.php";
?>
>>>>>>> 0c3b7b613fd094b8da9f035d8986e4b4eadce8b6
