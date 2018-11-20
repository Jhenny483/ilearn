<?php
include 'superior.php';
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){
    header('Location:login.html');
}

$banco = new BancoDeDados();
$banco->abrirConexao();

$idUsu = $_GET['idUsu'];

$find = "SELECT idUsuario, nicknameUsuario FROM usuario WHERE idUsuario = '{$_GET['idUsu']}'";
$banco->executarSQL($find);
$resu = $banco->lerResultados(); 



foreach ($resu as $log) {

}

?>
<html lang="pt-br">
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

<head>
                            <!-- <button>
                                <a href="telaSalvos.php?nomeUsu=<?= $publicacao['emailUsuario']; ?>&textoPub=<?= $publicacao['textoPublicacao'];?> &idPub=<?=$publicacao['idPublicacao'];?> &idUsuPub=<?=$publicacao['idUsuario'];?>" src=""> salvar </a>
                            </button>
                                    <input type="hidden" name="idPub" value="<?=$publicacao['idPublicacao'];?>">
 -->
     
 </head>

<body>

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
                    <img src="assets/img/user.jpg" alt="">
                </div>
</div>
<div class="col-md-6">
                <div class="menuPerfil">


<?php 
    
    $SQLCOUNT = "SELECT idSeguidor FROM seguidor WHERE idSeguido = '{$_GET['idUsu']}'";
$banco->executarSQL($SQLCOUNT);
$resBusca = $banco->lerResultados();
   $idP = count($resBusca);


    $SQLCOUNTDOIS = "SELECT idSeguido FROM seguidor WHERE idSeguidor = '{$_GET['idUsu']}'";    
$banco->executarSQL($SQLCOUNTDOIS);
$resBuscaDois = $banco->lerResultados();
   $id = count($resBuscaDois);
// echo $id;

?>

<p>
<a href="seguidoresOutro.php?idUsu=<?=$log['idUsuario'];?>">Seguidores: <span><?php echo $idP;?></span></a>
<a href="seguindoOutro.php?idUsu=<?=$log['idUsuario'];?>">Seguindo: <span><?php echo $id;?></span> </a>

<?php 

$VERIFICA = "SELECT idSeguido, idSeguidor FROM seguidor WHERE idSeguidor = '{$_SESSION['cod'][0]}'";
  
    $banco->executarSQL($VERIFICA);
    $resPesquisa = $banco->lerResultados();

if($resPesquisa == TRUE){ ?>

<button class="btn btn-primary botao"><a href="removerSeguidor.php?idUsu=<?=$log['idUsuario'];?> " src="">Deixar de seguir</a></button>
</p>
  
<?php } else { ?>
  
<button class="btn btn-primary botao"><a href="telaSeguirSQL.php?idUsuario=<?=$log['idUsuario'];?> &nomeUsuario=<?=$log['nicknameUsuario'];?>" src="">Seguir</a></button>
</p>
<?php }

?>

                    </div>

</div>
                </div>
            </div>
             </div>
             
             <div class="col-md-12">
                 <div class="caixaInformacaoUsuario">
                    <div class="row">
                     <div class="col-md-6">
                  <ul>

                    <?php 
                  $BUSCA = "SELECT * FROM formacao WHERE nomeDono = '{$log['nicknameUsuario']}'";
                    $banco->executarSQL($BUSCA);
                    $resP = $banco->lerResultados();

                    foreach ($resP as $r) {
                        $r['nivel'];
                        $r['curso'];
                        $r['instituicao'];
                                        }
                  ?>
                        <li>Nome: <?= $log['nicknameUsuario'];?> </li>
                         <li>Formação: <?=$r['nivel'];?> EM <?= $r['curso'];?> / <?=$r['instituicao'];?></li>
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
            
            
          

            
    
    <!--                 <div class="row"> 
            <div class="col-sm-12 col-md-12 primary ">
     -->            <!-- <form  method="POST" action="model/uploadPost.php" enctype="multipart/form-data" > -->
    <!--                 <div class="card my-4">
                        <div class="fazerPost">
                            O que há de novo
                        </div>
                        <div class="fazerPostMensagem testePTColorgray">
                    <form action="telaPublicacao.php" method="POST"> 
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
                            </div>
                            
                        </div>
                    </div>
                </form>

 -->

    
<?php
        $busca = "SELECT emailUsuario, idUsuario, nicknameUsuario FROM usuario WHERE idUsuario = '{$idUsu}'";

// var_dump($idUsu);
$banco->executarSQL($busca);
    $res = $banco->lerResultados();

                    $buscaPublicacoes = "SELECT emailUsuario, idUsuario, textoPublicacao, idPublicacao, nicknameUsuario FROM usuario INNER JOIN publicacao ON usuario.idUsuario = publicacao.idUsuarioPublicacao WHERE usuario.idUsuario = '{$_GET['idUsu']}' ORDER BY idPublicacao DESC";

                    $banco->executarSQL($buscaPublicacoes);
                    $resPub = $banco->lerResultados();


                        foreach ($resPub as $publicacao) { ?>
            <div class="card testePTColorgray my-4 ">
                    <div class="mensagem">
            <a href="perfilOutroUsuario.php?idUsu=<?=$publicacao['idUsuario'];?>&idPub=<?=$publicacao['idPublicacao'];?>" src="">

                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto"><?= $publicacao['nicknameUsuario'] ?><br>compartilhado em 00/00/0000</p>
                            </div>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-text img text-post">
                            <p>
                                <?= $publicacao['textoPublicacao'];?>
                            </p>
                        </div>
                    </div>

                      <?php
                  
             $coment = "SELECT idComentario, comentarioPublicado, emailUsuario, idPublicacao, idUsuario, nicknameUsuario FROM comentario 
                        INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                        INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$publicacao['idPublicacao']} ORDER BY idComentario ASC"; 
                                
                                $banco->executarSQL($coment);
                                
                                    $arrayComentarios = $banco->lerResultados();
                                 $idCom = count($arrayComentarios); ?>

                    <div class="card fotoPost"> </div>
                    <div class="botaoMensagem cinza-claro2 py-2">
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-share"></i></button> -->
                        <!-- <button class="btn btn-primary botao"><i class="fa fa-thumbs-up"></i></button> -->
                        <!-- <p class="ml-4 mt-1">10 curtidas </p> -->
                        <p class=" mt-1"> <?php echo $idCom;?> Comentarios</p>
                        <!-- <a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src="">
                            <button class="btn btn-primary botao"><i class="fa fa-save"></i></button></a> -->
                    </div>
                <?php
                                        foreach ($arrayComentarios as $comentario) { ?>
                      



                    <div class="mensagemPostResposta">
                        <div class="avatarMensagem">
                            <a href="coordenador.php"><img src="assets/img/avatar.png" class="rounded-circle" alt=""></a>
                        </div>
                        <div class="nomeAvatarMensagemResposta">
                             <a href="perfilOutroUsuario.php?idUsu=<?=$comentario['idUsuario'];?>&idPub=<?=$comentario['idPublicacao'];?>"> <p class="text-preto"><?=$comentario['nicknameUsuario'];?>
                               <!-- <br> Compartilhado em 00/00/0000 -->
                                </p></a>
                                <!-- <br> Compartilhado em 00/00/0000 -->
                            </a>
                        </div>  <?php
                        if($comentario['idUsuario'] == $_SESSION['cod'][0]){?>
                        <a href="telaExcluirComentarioDois.php?idpub=<?= $comentario['idPublicacao']; ?>&idUsuario=<?= $comentario['idUsuario'];?> &idCom=<?=$comentario['idComentario'];?>" src="" >
                        <button class="btn btn-primary botao"><i class="fa fa-trash-o"></i></button>
                    </a>
                        <?php } ?>
                     
                        <div class="card-body">
                            <div class="card-text clear text-post">
                                <p><?=$comentario['comentarioPublicado'];?></p>
                                <!-- <p> Responder</p> -->
                            </div>
                        </div>
                    </div>
         <?php } ?> 

                    <div class="respondaMensagem">

                        <div class="avatarResponda">
                        <form action="ComentarioPerfilOutro.php" method="GET">
                            <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                        </div>
                        <div class="respondaMensagemInput">
                            <input type="hidden" name="idPub" value="<?=$publicacao['idPublicacao'];?>">
                            <input type="hidden" name="idUsu" value="<?=$publicacao['idUsuario'];?>">
                            <input type="text" name="comentario">

                        </div>
                        <div class="respondaMensagemBotao">
                      </form>
                            <button class="btn btn-primary botao">Enviar</button>
                        </div>
                    </div> 
            </div> 

                

         <?php } 


include 'inferior.php'; 
?>