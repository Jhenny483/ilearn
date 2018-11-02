<?php
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){
    session_destroy();
    header('Location:login.html');
}

?>

<html lang="pt-br">

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
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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

        <!-- sidebar-wrapper  -->
<main class="page-content">
            <div class="container-fluid">
                 <div class="row"> 
            <div class="col-sm-12 col-md-12 primary ">
                <form  method="POST" action="telaPublicacao.php" >
                    <div class="card my-4">
                        <div class="fazerPost">
                            O que há de novo
                        </div>
                        <div class="fazerPostMensagem testePTColorgray">

                            <textarea name="textoPublicacao" id="compartilhe" placeholder="compartilhe seu status"></textarea>
                        </div>
                        <div class="fazerPost  cinza-claro">
                            
                          
                            <div class="fazerPostBotao">
                                
                                <input name="SendCadImg" type="submit" value="Enviar" class="btn btn-primary float-right">
                            </div>
                            
                        </div>
                    </div>
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
            <div style="width: 100%; height:flex; background-color: whitesmoke;border-bottom: 2px solid #000000;margin-bottom: 10px;" class="linhaDoTempo">
                            
                <button style="position: relative;left: 90%;top: 5%;">
                       <a href="telaSalvos.php?nomeUsu=<?= $pub['emailUsuario']; ?>&textoPub=<?= $pub['textoPublicacao'];?> &idPub=<?=$pub['idPublicacao'];?> &idUsuPub=<?=$pub['idUsuario'];?>" src=""> salvar </a>
               </button>
                            
                <br>
                <a href="perfilOutroUsuario.php?idUsu=<?=$pub['idUsuario'];?>&idPub=<?=$pub['idPublicacao'];?>" src="">           
                    <label><?= $pub['emailUsuario'] ?></label></a>
                    <p><?= $pub['textoPublicacao']; ?></p>
                                <?php
                                $coment = "SELECT idComentario,comentarioPublicado, emailUsuario FROM comentario 
                                INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
                                INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario WHERE publicacao.idPublicacao = {$pub['idPublicacao']} ORDER BY idComentario ASC"; 
                                
                                $banco->executarSQL($coment);
                                
                                    $arrayComentarios = $banco->lerResultados();
                                        foreach ($arrayComentarios as $comentario) { ?>
                                                <div style="width: 100%; height:flex; background-color: whitesmoke;border-top: 2px solid #000000;" class="linhaDoTempo">
                                            
                                            <p> <?= $comentario['emailUsuario'];?> </p>
                                            <p> <?=$comentario['comentarioPublicado'];?></p>
                                    
                                    </div>
                                 
                                 <?php } ?>
                                
                                    <form action="telaComentario.php" method="POST">
                                            <input type="hidden" name="idPub" value="<?=$pub['idPublicacao'];?>">
                                        
                <div class="row" >
                    <div class="caixaComentario" >
                        <div class="comentarioCaixa">
                            <textarea name="comentario" id="" ></textarea>
                        </div>
                        
                        <div class="comentarioCaixaBtn">
                            <button>Enviar</button>
                        </div>

                    </div>
                </div>
      </form>

</div>
                                
<?php }  
?>



<?php
    


?>  


                <hr>
                
                



            </div>
        </main>
        <!-- page-content" -->
    </div>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>
