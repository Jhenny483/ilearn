<?php
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){
	header('Location:login.html');
}


?>
<!DOCTYPE html>
<html>



<style type="text/css">
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title></title>

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>


    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fa fa-bars"></i>
        </a>


        <nav id="sidebar" class="sidebar-wrapper">

            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Fechar menu</a>
                    <div id="close-sidebar">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name"><?= $usr['emailUsuario'];?>
                
                                            
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <form action="telaPesquisaSQL.php" method="GET">        
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" name="pesquisa" class="form-control search-menu" placeholder="Buscar">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
         </form> 
         
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="sidebar-dropdown">
                            <a href="telaIndex.php">
                                <i class="fa fa-user"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="telaConsultaSalvos.php">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Salvos</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Notificação</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Notificação - 1</a></li>
                                    <li><a href="#">Notificação - 2</a></li>
                                    <li><a href="#">Notificação - 3</a></li>
                                    <li><a href="#">Notificação - 4</a></li>
                                    <li><a href="#">Notificação - 5</a></li>
                                    <li><a href="#">Notificação - 6</a></li>
                                    <li class="verTudo"><a href="notificacao.html">VER TODAS NOTIFICAÇÕES</a></li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="perfil.php">
                                <i class="fa fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" class="" id="dropdownMenuNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                    </a>
                    <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i> Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </div>
                </div>


                <div class="dropdown">
                    <a href="telaConfig.php" class="" id="dropdownMenuMessage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>

                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="#">Setting</a>
                    </div>
                </div>
                <div>
                    <a href="logOut.php">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>

   <main class="page-content">
            <div class="container-fluid">
               <div class="col-md-12">
                  <div class="titulo"><h1>Perfil</h1></div>
                <div class="bannerUser">
                    <img src="assets/img/bg2.jpg" alt="">
                </div>
               
                
                <div class="fotoUser">
                    <img src="assets/img/user.jpg" alt="">
                    <p><?= $usr['emailUsuario'];?></p>

                </div>
            </div>
             </div>
             
             <div class="col-md-12">
                 <div class="caixaInformacaoUsuario">
                     
                     
                 </div>
                 
             </div>
            
            
             <div class="container">
                    <div class="col-12-md">
                        <div class="row">
                            <textarea name="" id="" cols="30" class="caixaPublicacao" placeholder="digite um texto">
                </textarea>
                        </div>
                    </div>
                </div>
                
        <!-- page-content" -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>

	
<?php
$selectUsu= "SELECT emailUsuario, textoPublicacao, idPublicacao, idUsuario FROM usuario INNER JOIN publicacao ON usuario.idUsuario = publicacao.idUsuarioPublicacao WHERE usuario.idUsuario  = '{$_SESSION['cod'][0]}' ORDER BY idPublicacao DESC";


		$banco = new BancoDeDados();
		$banco->abrirConexao();
		$banco->executarSQL($selectUsu);
		$resUsu = $banco->lerResultados();


		
			foreach ($resUsu as $perfil) { ?>

                   <div class="card testePTColorgray my-4">
                    <div class="mensagem">
                <button>
                    <a href="telaExcluir.php?idpub=<?= $perfil['idPublicacao']; ?>&idUsuario=<?= $perfil['idUsuario']; ?>" src="" >excluir</a>
                </button>
                
            
                            <div class="avatarMensagem">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                            </div>
                            <div class="nomeAvatarMensagem">
                                <p class="text-preto">
                       
                                <?= $perfil['emailUsuario'];?>
                                </p>
                            
                                <!-- <br>compartilhado em 00/00/0000</p> -->
                            </div>
                       
                    </div>
                    <div class="card-body">
                        <div class="card-text img">
                            <p>
                               <?=$perfil['textoPublicacao'];?>
                            </p>
                        </div>
                    </div>
                  <!--   <div class="card fotoPost">
                        <img src="assets/img/banner1-1.jpg" alt="">                    
                    </div> -->
                    <!-- <div class="botaoMensagem cinza-claro2 py-2">
                        <button class="btn btn-primary"><i class="fas fa-thumbs-up"></i></button>
                        <button class="btn btn-primary"><i class="fas fa-share"></i></button>
                        <p class="ml-4 mt-1">10 curtidas </p>
                        <p class=" mt-1"> 10 Comentarios</p>
                    </div> -->                            
                <br>
                                <?php
                                 $coment = "SELECT idComentario, comentarioPublicado, emailUsuario, idPublicacao, idUsuario FROM comentario 
                                INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                                INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$perfil['idPublicacao']} ORDER BY idComentario ASC"; 
                                
                                $banco->executarSQL($coment);
                                
                                    $arrayComentarios = $banco->lerResultados();
                                        foreach ($arrayComentarios as $comentario) { ?>
                        <div class="mensagemPost">
                        <div class="avatarMensagem">
<!--                             <a href="perfilOutroUsuario.php?idUsu=<?=$pub['idUsuario'];?>&idPub=<?=$pub['idPublicacao'];?>">
 -->                            <!-- <img src="assets/img/avatar.png" class="rounded-circle" alt=""></a> -->
                        </div>
                        <div class="nomeAvatarMensagem">
                            <!-- <a href="" -->
                               <a href="perfilUsuarioAleatorio.php?idUsu=<?=$comentario['idUsuario'];?>&idPub=<?=$comentario['idPublicacao'];?>"> <p class="text-preto"><?=$comentario['emailUsuario'];?>
                               <!-- <br> Compartilhado em 00/00/0000 -->
                                </p></a>
                            <!-- </a> -->
                        </div>
                        <div class="card-body">
                            <div class="card-text clear">
                                <p><?=$comentario['comentarioPublicado'];?></p>
            
                            </div>
                        </div>
                        </div>
                                                            
         <?php } ?>

            <form action="telaComentarioPerfil.php" method="POST">                  
                <div class="row" >
                    <div class="caixaComentario" >
                        <div class="comentarioCaixa">
                      
                            <input type="hidden" name="idPub" value="<?=$comentario['idPublicacao'];?>">
                      
                            <textarea name="comentario" id="" placeholder="digite um comentario"></textarea>
                        </div>
                        
                        <div class="comentarioCaixaBtn">
                            <button>Enviar</button>
                        </div>

                    </div>
                </div>
      </form>
    
</div>
                                
<?php }  





// array(1) { [0]=> array(8) { ["idUsuario"]=> string(2) "97" [0]=> string(2) "97" ["senhaUsuario"]=> string(5) "TESTE" [1]=> string(5) "TESTE" ["emailUsuario"]=> string(8) "humberto" [2]=> string(8) "humberto" ["cpfUsuario"]=> string(3) "000" [3]=> string(3) "000" } }

?>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>
