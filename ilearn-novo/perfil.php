<?php
include "superior.php";
        $banco = new BancoDeDados();
$sql = "SELECT * FROM usuario WHERE idUsuario ='{$_SESSION['cod'][0]}'";
$banco->abrirConexao();
$banco->executarSQL($sql);
$res = $banco->lerResultados();
foreach ($res as $usu) {
    
}
?>

<style>
    .menuPerfil{

        text-align: right;
    }

    .menuPerfil p{

        line-height: 105px;
    }

     .menuPerfil p a{

       color:black;
    }

    .menuPerfil p a:hover{

       color:#6a6f75;
    }
</style>



        <!-- sidebar-wrapper  -->
        <main class="page-content ">
            <div class="container-fluid margin-superior-menu">
               <div class="col-md-12">
                  <!-- <div class="titulo"><h1></h1></div> -->
                <div class="bannerUser">
                    <img src="assets/img/bg2.jpg" alt="">
                </div>
                
               <div class="row">
                <div class="col-md-6">
                <div class="fotoUser">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                </div>
</div>
<div class="col-md-6">
                <div class="menuPerfil">

<?php 
    
    $SQLCOUNT = "SELECT idSeguidor FROM seguidor WHERE idSeguido = '{$_SESSION['cod'][0]}'";
$banco->executarSQL($SQLCOUNT);
$resBusca = $banco->lerResultados();
   $idP = count($resBusca);


    $SQLCOUNTDOIS = "SELECT idSeguido FROM seguidor WHERE idSeguidor = '{$_SESSION['cod'][0]}'";    
$banco->executarSQL($SQLCOUNTDOIS);
$resBuscaDois = $banco->lerResultados();
   $id = count($resBuscaDois);
// echo $id;

?>
<p>
<a href="seguidores.php">Seguidores:<span><?php echo $idP;?></span></a>
<a href="seguindo.php">Seguindo: <span><?php echo $id; ?></span> </a>
<!-- <button class="btn btn-primary botao">Seguir</button> -->
</p>

                    </div>

</div>
                </div>
            </div>
             </div>
             
             <div class="col-md-12">
                 <div class="caixaInformacaoUsuario">
                    <div class="row">
                     <div class="col-md-6">
                  <ul><?php 
                  $BUSCA = "SELECT * FROM formacao WHERE nomeDono = '{$usu['nicknameUsuario']}'";
                    $banco->executarSQL($BUSCA);
                    $resP = $banco->lerResultados();

                    foreach ($resP as $r) {
                        $r['nivel'];
                        $r['curso'];
                        $r['instituicao'];
                                        }
                  ?>
                        <li>Nome: <?= $usu['nicknameUsuario'];?> </li>
                         <li>Formação:<?=$r['nivel'];?> EM <?= $r['curso'];?> / <?=$r['instituicao'];?></li>
                       <!--   
                         <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                         
                         <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                     
                        

                  </ul>
                  </div>
                   <div class="col-md-6">
                  <ul>
                           <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                         
                         <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                         
                         <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                        --> 

                  </ul>
                  </div>
                  
                  
                  
                 <!--   <div class="col-md-12 botaoSeguir">
                  <button class="btn botao">Alterar conta</button>
                  </div> -->
                  </div>
                 </div>
                 
             </div>
            
            
          

            
                    <div class="row"> 
            <div class="col-sm-12 col-md-12 primary ">
                <!-- <form  method="POST" action="model/uploadPost.php" enctype="multipart/form-data" > -->
                    <div class="card my-4">
                    <form action="telaPublicacaoPerfil.php" method="POST"> 
                        <div class="fazerPost">
                            O que há de novo
                        </div>
                        <div class="fazerPostMensagem testePTColorgray">
                            <textarea name="textoPublicacao" id="compartilhe" placeholder="compartilhe seu status"></textarea>
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
                            <div class="fazerPostBotao">
                                
                                <input name="SendCadImg" type="submit" value="Enviar" onclick="Requisitar()" class="btn btn-primary float-right botao">
                        </form>
                            </div>
                            
                        </div>
                    </div>

<?php
$selectUsu= "SELECT emailUsuario, textoPublicacao, idPublicacao, idUsuario, nicknameUsuario FROM usuario INNER JOIN publicacao ON usuario.idUsuario = publicacao.idUsuarioPublicacao WHERE usuario.idUsuario  = '{$_SESSION['cod'][0]}' ORDER BY idPublicacao DESC";


        $banco->abrirConexao();
        $banco->executarSQL($selectUsu);
        $resUsu = $banco->lerResultados();
   
            foreach ($resUsu as $perfil) {?>
               <div class="card testePTColorgray my-4 ">
                    <div class="mensagem">
                        <a href="perfil.php">
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto"><?= $perfil['nicknameUsuario'] ?>
                                <!-- <br>compartilhado em 00/00/0000</p> -->
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img text-post">
                            <p style="font-size: 20px;">
                                <?= $perfil['textoPublicacao'];?>
                            </p>
                        </div>

            <?php 
                            $coment = "SELECT idComentario,comentarioPublicado, emailUsuario, nicknameUsuario, idUsuario, idPublicacao FROM comentario 
                                INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                                INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$perfil['idPublicacao']} ORDER BY idComentario ASC"; 
                         
                         $banco->executarSQL($coment);
                                
                    $arrayComentarios = $banco->lerResultados(); 

                        $idCom = count($arrayComentarios); ?>
                    </div>
                    <div class="card fotoPost"> </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-share"></i></button> -->
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button> -->
                        <a href="telaExcluir.php?idpub=<?= $perfil['idPublicacao']; ?>&idUsuario=<?= $perfil['idUsuario']; ?>" src="" >
                        <button class="btn btn-primary botao"><i class="fa fa-trash-o"></i></button></a>
                        
                        <!-- <p class="ml-4 mt-1">10 curtidas </p> -->
                        <p class=" mt-1"> <?php echo $idCom;?> Comentarios</p>
                        <!-- <a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src="">
                            <button class="btn btn-primary botao"><i class="fa fa-save"></i></button></a> -->
                    </div>
                 
<?php
                   foreach ($arrayComentarios as $comentario) { ?>
                

                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
    <a href="perfilOutroUsuario.php?idUsu=<?=$comentario['idUsuario'];?>&idPub=<?=$comentario['idPublicacao'];?>" src=""> <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                           <a href="perfilOutroUsuario.php?idUsu=<?=$comentario['idUsuario'];?>&idPub=<?=$comentario['idPublicacao'];?>" src="">
                                <p class="text-preto"><?=$comentario['nicknameUsuario'];?> 
                                <!-- <br> Compartilhado em 00/00/0000 -->
                                </p>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="card-text clear text-post">
                                <p><?=$comentario['comentarioPublicado'];?></p>
                                <!-- <p> Responder</p> -->
                            </div>
                        </div>
                    </div>
         <?php } ?> 

                    <div class="respondaMensagem">

                        <form action="telaComentarioPerfil.php" method="GET">
                        <div class="avatarResponda">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="hidden" name="idPub" value="<?=$perfil['idPublicacao'];?>">
                            <input type="hidden" name="idUsu" value="<?=$perfil['idUsuario'];?>">

                            <input type="text" name="comentario">

                        </div>
                        <div class="respondaMensagemBotao">
                            <button type="submit" class="btn btn-primary botao">Enviar</button>
                        </div>
                            </form>
                    </div> 
            </div> 

                
<?php } ?>


               <!--  <div class="card testePTColorgray my-4">
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
                </div>
                
                
                
                
                
                --> 
<!--                post 2           -->
            <!-- <div class="card testePTColorgray my-4">
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
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio at suscipit id iure in ratione, aliquam, corporis odio fuga rerum dolore facere, labore necessitatibus accusantium voluptatem molestias praesentium temporibus assetsinctio!
                            </p>
                        </div>
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
           
            <!-- <div class="card testePTColorgray my-4">
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
                </div>
           
            </div>
                
                



            </div>
               
 -->
          

            
           
           
           
           
           
           
           
           
           
           
           
           
        </main>
        <!-- page-content" -->
   



<?php
include "inferior.php";
?>
