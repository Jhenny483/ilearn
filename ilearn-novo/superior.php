<?php 
    session_start();
    require_once "bancoDeDados.php";
    $usr = $_SESSION['cod'][0];
    $sql = "SELECT imagemUsuario, nicknameUsuario from usuario WHERE idUsuario = '{$usr}'";


    $banco = new BancoDeDados();
    $banco->abrirConexao();
    $banco->executarSQL($sql);
    $res = $banco->lerResultados();
    foreach ($res as $foto) {
     // echo $foto['imagemUsuario'];
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
    <link rel="stylesheet" href="assets/css/style-1.css">


    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />


<style>
    .user {

        font-size: 20px;
    }



</style>

</head>

<body>
        <style>


       .testePTColorgray{

        background-color: #f5f5f5; 

       }
/*
       .fazerPostBotao {

        background-color: #1e90ff!important;
    }

     .fazerPostBotao:hover{

        background-color: #87ceeb!important;
    }

       */

          .botao{

        background-color: #1e90ff!important;
    }

     .botao:hover{

        background-color: #87ceeb!important;
    }

       
       .logo img{

        width: 110px;
        margin-top: 8px;
       

       }

       .saudacao{

        float: right;
        font-size: 20px;
       line-height: 57px;
       }

       .topo{

        width: 100%;
        height: 60px;
         background: steelblue;
border-bottom:1px solid #000;
        margin-right: 0px!important;   
margin-left: 0px!important; 
position: fixed;
z-index: 999;

       }

.margin-superior-menu{
margin-top: 70px;

}

.text-post{
text-align: justify;
}
            .botaoSeguir button{
                float: right;
                margin-right: 30px;
            }
            
            
   </style>
         <div class="row topo">

<div class="col-md-6 logo" >
    <a href="index.php">
    <img src="img/logo.png" >
</a>
</div>

<div class="col-md-6">

   <p class="saudacao">  Olá <?=$foto['nicknameUsuario'];?>! <a href="logOut.php"><i class="fa fa-gears"></i></a></p>
</div>

</div>
    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fa fa-bars "></i>
        </a>


        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
<!--
                <div class="sidebar-brand">
                    <a href="index.php"></a>
                    <div id="close-sidebar">
                        <i class="fa fa-times"></i>
                    </div>
                </div>
-->
                <div class="sidebar-header">
                    <div class="user-pic">
                                <img src="assets/img/avatar.png" class="rounded-circle" alt="">
                    </div>
                    <div class="user-info">
                        <span class="user-name user"><?= $foto['nicknameUsuario'];?>
                            <!-- <strong>Smith</strong> -->
                        </span>
                        <!-- <span class="user-role">Administrator</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span> -->
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <form action="telaPesquisaSQL.php">
                        <div class="input-group">
                            <input type="text" name="pesquisa" class="form-control search-menu" placeholder="Pesquisar...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <!-- <li class="header-menu">
                            <span>General</span>
                        </li> -->
                        <li class="sidebar-dropdown">
                            <a href="index.php">
                                <i class="fa fa-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="salvos.php">
                                <i class="fa fa-save"></i>
                                <span>Salvos</span>
                               <!--  <span class="badge badge-pill badge-danger">New</span> -->
                            </a>
                          <!--   <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 1</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 2</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 3</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 4</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 5</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 6</span></a></li>
                                   <li class="verTudo"><a href="salvos.php">VER TODAS SALVAS</a></li>
                                    
                                </ul>
                            </div> -->
                        <!-- </li> -->
                       <!--  <li class="sidebar-dropdown">
                            <a href="notificacao.php">
                                <i class="fa fa-clock-o"></i>
                                <span>Notificação</span>
                                <span class="badge badge-pill badge-primary">6</span>
                            </a> -->
                           <!--  <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Notificação - 1</a></li>
                                    <li><a href="#">Notificação - 2</a></li>
                                    <li><a href="#">Notificação - 3</a></li>
                                    <li><a href="#">Notificação - 4</a></li>
                                    <li><a href="#">Notificação - 5</a></li>
                                    <li><a href="#">Notificação - 6</a></li>
                                    <li class="verTudo"><a href="notificacao.php">VER TODAS NOTIFICAÇÕES</a></li>
                                    
                                </ul>
                            </div> -->
                        </li>

                        <li class="sidebar-dropdown">
                            <a href="perfil.php">
                                <i class="fa fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        
                        <!-- <li class="sidebar-dropdown">
                            <a href="blog.php">
                                <i class="fa fa-th"></i>
                                <span>Blog</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" class="" id="dropdownMenuNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning notification">3</span>
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
                    <a href="#" class="" id="dropdownMenuMessage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="#">Setting</a>
                    </div>
                </div>
                <div>
                    <a href="logOut">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>
    