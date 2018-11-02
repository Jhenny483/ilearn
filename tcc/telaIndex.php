<?php
session_start();
require_once 'BancoDeDados.php';
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
                    <a href="index.html">pro sidebar</a>
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
                        <span class="user-role">Administrator</span>
                        <span class="user-status">
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
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="index.html">
                                <i class="fa fa-user"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Salvos</span>
                                <span class="badge badge-pill badge-danger">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 1</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 2</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 3</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 4</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 5</span></a></li>
                                    <li><a href="#">Salvos<span class="badge badge-pill badge-success">- 6</span></a></li>
                                    <li class="verTudo"><a href="salvos.html">VER TODAS SALVAS</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Notificação</span>
                                <span class="badge badge-pill badge-primary">6</span>
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
                            <a href="perfil.html">
                                <i class="fa fa-user"></i>
                                <span>Perfil</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-dropdown">
                            <a href="blog.html">
                                <i class="fa fa-user"></i>
                                <span>Blog</span>
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
                    <a href="telaConfig.php" class="" id="dropdownMenuMessage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a href="logOut.php">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>

        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="container">
                    <div class="col-12-md">
                        <div class="row">
                            <textarea name="" id="" cols="30" class="caixaPublicacao">
                    
                </textarea>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="post">
                    <img src="assets/img/bg1.jpg" alt="">
                </div>
                <hr>

                <div class="row">
                    <div class="caixaComentario">
                        <div class="fotoPerfilComentario">
                            <img src="assets/img/user.jpg" alt="">
                        </div>
                        <div class="comentario">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto rerum, eum nemo veritatis accusantium dolore temporibus excepturi quis architecto doloribus magnam totam iste accusamus vel blanditiis? Id tempore dolore reprehenderit.</p>
                        </div>

                    </div>
                </div>
                <div class="row my-4">
                    <div class="caixaComentarioDoComentario">
                        <div class="fotoPerfilComentario">
                            <img src="assets/img/user.jpg" alt="">
                        </div>
                        <div class="comentario">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto rerum, eum nemo veritatis accusantium dolore temporibus excepturi quis architecto doloribus magnam totam iste accusamus vel blanditiis? Id tempore dolore reprehenderit.</p>
                        </div>

                    </div>
                </div>

                <div class="row my-4">
                    <div class="caixaComentarioDoComentario">
                        <div class="fotoPerfilComentario">
                            <img src="assets/img/user.jpg" alt="">
                        </div>
                        <div class="comentario">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto rerum, eum nemo veritatis accusantium dolore temporibus excepturi quis architecto doloribus magnam totam iste accusamus vel blanditiis? Id tempore dolore reprehenderit.</p>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="caixaComentario">
                        <div class="fotoPerfilComentario">
                            <img src="assets/img/user.jpg" alt="">
                        </div>
                        <div class="comentario">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto rerum, eum nemo veritatis accusantium dolore temporibus excepturi quis architecto doloribus magnam totam iste accusamus vel blanditiis? Id tempore dolore reprehenderit.</p>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="caixaComentario">
                        <div class="fotoPerfilComentario">
                            <img src="assets/img/user.jpg" alt="">
                        </div>
                        <div class="comentarioCaixa">
                            <textarea name="" id="" ></textarea>
                        </div>
                        
                        <div class="comentarioCaixaBtn">
                            <button>Enviar</button>
                        </div>

                    </div>
                </div>
                
                



            </div>
        </main>
        <!-- page-content" -->
    </div>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>
