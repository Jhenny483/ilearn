<?php
include "superior.php";
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
                    <img src="assets/img/user.jpg" alt="">
                </div>
</div>
<div class="col-md-6">
                <div class="menuPerfil">


<p>
<a href="amigos.php">Seguidores: <span>10</span></a>
<a href="amigos.php">Seguindo: <span>12</span> </a>
<button class="btn btn-primary botao">Seguir</button>
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
                  <ul>
                        <li>Nome: nome user </li>
                         <li>Formação: formação user</li>
                         
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
                        

                  </ul>
                  </div>
                  
                  
                  
                   <div class="col-md-12 botaoSeguir">
                  <button class="btn botao">Alterar conta</button>
                  </div>
                  </div>
                 </div>
                 
             </div>
            
            
          

            
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
                             

                                    <li class="fotoInserir"><i class="fa fa-file"></i></li>
                                </ul>
                                <div class="esconder">
                                
                                    <input type="file" name="inserirFoto[]" class="inserirFoto" multiple="multiple">
                         </div>
                            </div>
                            <div class="fazerPostBotao">
                                
                                <input name="SendCadImg" type="submit" value="Enviar" class="btn btn-primary float-right botao">
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
               

          

            
           
           
           
           
           
           
           
           
           
           
           
           
        </main>
        <!-- page-content" -->
   



<?php
include "inferior.php";
?>
