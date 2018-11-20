<?php
include "superior.php";
// session_start();
require_once 'bancoDeDados.php';

 $sql = "SELECT textoPublicacao, emailUsuario, idUsuario, idPublicacao, nicknameUsuario FROM publicacao
             INNER JOIN usuario ON publicacao.idUsuarioPublicacao = usuario.idUsuario WHERE idPublicacao = '{$_GET['idPub']}' ORDER BY idPublicacao DESC";

    $banco = new BancoDeDados();
        $banco->abrirConexao();
        $banco->executarSQL($sql);
        $res = $banco->lerResultados();

        foreach ($res as $pub) {
?>
           <!-- sidebar-wrapper  -->
            <main class="page-content">
                <div class="container-fluid margin-superior-menu">
<div class="card testePTColorgray my-4 ">
                    <div class="mensagem">
                        <a href="perfil.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto"><?=$pub['nicknameUsuario'];?>
                                <!-- <br>compartilhado em 00/00/0000</p> -->
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img text-post">
                            <p style="font-size: 20px;">
                               <?=$pub['textoPublicacao'];?> 
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                                           </div>
            <?php 
                            $coment = "SELECT idComentario,comentarioPublicado, emailUsuario, idUsuario, idPublicacao, nicknameUsuario FROM comentario 
                                INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                                INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = '{$_GET['idPub']}' ORDER BY idComentario ASC"; 
                        $banco->executarSQL($coment);
                        $resC = $banco->lerResultados();

                        $idCom = count($resC);?>

                    <div class="botaoMensagem cinza-claro2 py-2">
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-share"></i></button> -->
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button> -->
                        <!-- <p class="ml-4 mt-1">10 curtidas </p> -->
                        <p class=" mt-1"> <?php echo $idCom;?> Comentarios</p>
                    </div>

<?php

                            foreach ($resC as $com) { ?>
                    
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="coordenador.php">
                                <p class="text-preto"><?=$com['nicknameUsuario'];?> 
                                <!-- <br> Compartilhado em 00/00/0000 -->
                                </p>
                            </a>
                        </div>
                           <?php
                        if($com['idUsuario'] == $_SESSION['cod'][0]){?>
                        <a href="telaExcluirComentarioDois.php?idpub=<?= $pub['idPublicacao']; ?>&idUsuario=<?= $com['idUsuario'];?> &idCom=<?=$com['idComentario'];?>" src="" >
                        <button class="btn btn-primary botao"><i class="fa fa-trash-o"></i></button>
                    </a>
                        <?php } ?>
                     
                        <div class="card-body">
                            <div class="card-text clear text-post">
                                <p><?=$com['comentarioPublicado'];?></p>
                              
                            </div>
                        </div>
                    </div>

            <?php  } ?>
            <form action="telaComentarioDois.php" method="POST">
                    <div class="respondaMensagem">
                        <div class="avatarResponda">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="hidden" name="idPub" value="<?=$pub['idPublicacao'];?>">

                            <input type="text" name="comentario">
                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary botao">Enviar</button>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </main>

<?php }
include "inferior.php";
?>