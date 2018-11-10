<?php
include "superior.php";

?>
       <html>
       <style>


       .testePTColorgray{

        background-color: #f5f5f5!important; 

       }


     


   </style>

<body>

        <!-- sidebar-wrapper  -->
        <main class="page-content">
   

            <div class="container-fluid margin-superior-menu">
                 <div class="row"> 
            <div class="col-sm-12 col-md-12 primary ">
                <!-- <form  method="POST" action="model/uploadPost.php" enctype="multipart/form-data" > -->
                    <div class="card my-4">
                        <div class="fazerPost">
                            O que está estudando?
                        </div>
                <form action="telaPublicacao.php" method="POST">
                        <div class="fazerPostMensagem testePTColorgray">
                            <textarea name="textoPublicacao" id="compartilhe" placeholder="compartilhe suas descobertas com seus seguidores"></textarea>
                        </div>
                        <div class="fazerPost  cinza-claro">
                            
                            <div class="fazerPostVidImg">
                                <ul>
                             

                                    <li class="fotoInserir"><i class="fa fa-file"></i></li>
                                </ul>
                                <div class="esconder">
                                
                                    <input type="file" name="inserirFoto[]" class="inserirFoto" multiple="multiple">
                         </div>
                            </div>
                            <div class="fazerPostBotao ">
                                
                                <input name="SendCadImg" type="submit" value="Enviar" class="btn btn-primary float-right botao">
                            </div>
                            </form>
                        </div>
                    </div>
                </form>

 <!-- primeiro post -->

<?php 
    $sql = "SELECT textoPublicacao, emailUsuario, idUsuario, idPublicacao FROM publicacao
             INNER JOIN usuario ON publicacao.idUsuarioPublicacao = usuario.idUsuario ORDER BY idPublicacao DESC";

    $banco = new BancoDeDados();
        $banco->abrirConexao();
        $banco->executarSQL($sql);
        $res = $banco->lerResultados();


            foreach ($res as $pub) {?>
               <div class="card testePTColorgray my-4 ">
                    <div class="mensagem">
                        <a href="perfilOutroUsuario.php?idUsu=<?=$pub['idUsuario'];?>&idPub=<?=$pub['idPublicacao'];?>" src="">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto"><?= $pub['emailUsuario'] ?><br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img text-post">
                            <p>
                                <?= $pub['textoPublicacao'];?>
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost"> </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary botao"><i class="fa fa-share"></i></button>
                        <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                        <a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src="">
                            <button class="btn btn-primary botao"><i class="fa fa-save"></i></button></a>
                    </div>
                 

            <?php 
                            $coment = "SELECT idComentario,comentarioPublicado, emailUsuario, idUsuario, idPublicacao FROM comentario 
                                INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                                INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$pub['idPublicacao']} ORDER BY idComentario ASC"; 
                        $banco->executarSQL($coment);
                        $resC = $banco->lerResultados();
                         
                foreach ($resC as $com) {?>           

                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="coordenador.php">
                                <p class="text-preto"><?=$com['emailUsuario'];?> 
                                <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>

                        <?php
                        if($com['idUsuario'] == $_SESSION['cod'][0]){?>
                     <a href="telaExcluirComentario.php?idpub=<?= $com['idPublicacao']; ?>&idUsuario=<?= $com['idUsuario'];?> &idCom=<?=$com['idComentario'];?>" src="" >
                        <button class="btn btn-primary botao"><i class="fa fa-trash-o"></i></button></a>
                        <?php } ?>
                        
                        <div class="card-body">
                            <div class="card-text clear text-post">
                                <p><?=$com['comentarioPublicado'];?></p>
                                <!-- <p> Responder</p> -->
                            </div>
                        </div>
                    </div>
         <?php } ?>

                    <div class="respondaMensagem">

                        <form action="telaComentario.php" method="POST">
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
                            </form>
                    </div> 
            </div> 
 <?php }
         ?>


              




                <!-- <div class="card testePTColorgray my-4 ">
                    <div class="mensagem">
                        <a href="perfil.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto">Nome user <br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img text-post">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                                   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                                           </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary botao"><i class="fa fa-share"></i></button>
                        <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div> -->
              <!--       <div class="mensagemPost">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagem">
                            <a href="perfil.php">
                               <a href="perfil.php"> <p class="text-preto">Nome user <br> Compartilhado em 00/00/0000
                                </p></a>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear text-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!</p>
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
                            <div class="card-text clear text-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div>
                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="perfil.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                            <a href="perfil.php">
                                <p class="text-preto">Nome user 
                                <br> Compartilhado em 00/00/0000
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear text-post">
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
                            <button type="submit" class="btn btn-primary botao">Enviar</button>
                        </div>
                    </div>
                </div>
               -->  
                
                
                
                
                
<!--                post 2           -->
            <!-- <div class="card testePTColorgray my-4 ">


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
                        <div class="card-text img text-post">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>


                    <div class="card fotoPost">
                                      </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary botao"><i class="fa fa-share"></i></button>
                        <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button>
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
                            <div class="card-text clear text-post">
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
                            <div class="card-text clear text-post">
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
                            <button type="submit" class="btn btn-primary botao">Enviar</button>
                        </div>
                    </div>
                </div> -->
<!--           post 3        -->
           <!-- 
            <div class="card testePTColorgray my-4 ">
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
                        <div class="card-text img text-post">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
                    </div>
                    <div class="card fotoPost">
                                          </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary botao"><i class="fa fa-share"></i></button>
                        <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button>
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
                            <div class="card-text clear text-post">
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
                            <div class="card-text clear text-post">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad provident quia tempore minus maiores, modi nihil laudantium? Quidem officia adipisci eligendi, nihil, natus, reprehenderit placeat earum iusto blanditiis eius voluptatem.</p>
                                <p> Responder</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="mensagemPostResposta">
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
                            <div class="card-text clear text-post">
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
                            <button type="submit" class="btn btn-primary botao">Enviar</button>
                        </div>
                    </div>
                </div>
           
            </div> -->
                
                



        <!-- page-content" -->

    </div>
        </div>
            </div>
                </div>
</main>
</body>
</html>