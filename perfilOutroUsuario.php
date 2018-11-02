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
.divUsuario{
		background-color: whitesmoke;
		width: 15%;
		height: 100%;
		position: absolute;
		left: 0%; 
	}
</style>
<head>
	<title>perfil</title>
</head>
<body>

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
                            <a href="perfil.html">
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
	
<?php


		$busca = "SELECT emailUsuario FROM usuario WHERE idUsuario = '{$_GET['idUsu']}'";

$banco = new BancoDeDados();
$banco->abrirConexao();
$banco->executarSQL($busca);
$resBusca = $banco->lerResultados();

		foreach ($resBusca as $perfil) { ?>
			<div style="width: 1000px; background-color: grey; position: relative;left: 18%; height:100px;text-align: center;">
			
				<p><?=$perfil['emailUsuario'];?></p>
			
			</div>

				<?php

					$buscaPublicacoes = "SELECT emailUsuario, textoPublicacao, idPublicacao FROM usuario INNER JOIN publicacao ON usuario.idUsuario = publicacao.idUsuarioPublicacao WHERE usuario.idUsuario = '{$_GET['idUsu']}' ORDER BY idPublicacao DESC";

					$banco->executarSQL($buscaPublicacoes);
					$resPub = $banco->lerResultados();


						foreach ($resPub as $publicacao) { ?>
			
					 		<div style="width: 1000px; height:flex; background-color: whitesmoke;border-bottom: 2px solid #000000;margin-bottom: 10px; position: relative;left: 18%;top: 70px; text-align: center;" class="linhaDoTempo">
			
									<input type="hidden" name="idPub" value="<?=$publicacao['idPublicacao'];?>">
			
									<br><label><?= $publicacao['emailUsuario']; ?></label>
		 	
		 							<p><?= $publicacao['textoPublicacao']; ?></p>
		 					</div>
		 							<?php 
		 							
		 				$buscaComentarios = "SELECT idComentario,comentarioPublicado, emailUsuario FROM comentario 
							INNER JOIN publicacao ON comentario.idPublicacaoComentada = publicacao.idPublicacao 
								INNER JOIN usuario ON comentario.idComentador = usuario.idUsuario 
								WHERE publicacao.idPublicacao = '{$publicacao['idPublicacao']}'  ORDER BY comentarioPublicado DESC";

		 									$banco->executarSQL($buscaComentarios);
		 									$resCom = $banco->lerResultados();

		 									foreach ($resCom as $comentario) { ?>
		 	
		 									<div style="width: 900px; height:80px; position:relative; 
		 									left:22%; top: 65px; background-color: grey;border-top: 2px solid #000000;" class="linhaDoTempo">
											
		 										<p><?=$comentario['emailUsuario'];?></p>
		 	
		 										<p><?=$comentario['comentarioPublicado'];?></p>
		 	
	 									</div>

							<?php } ?>



				
		<?php } 


}

// Notice: Array to string conversion in C:\Xampp\htdocs\TCC!ETEC\perfilOutroUsuario.php on line 56

// Notice: Undefined index: emailUsuario in C:\Xampp\htdocs\TCC!ETEC\perfilOutroUsuario.php on line 46
// Notice: Undefined index: emailUsuario in C:\Xampp\htdocs\TCC!ETEC\perfilOutroUsuario.php on line 59
?>

</body>
</html>