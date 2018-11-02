<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with
sliding effect and dropdown menu based on bootstrap 3">
    <title></title>

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
</head>

<body>

<!--
    <div class="menu">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
Iure reiciendis voluptates eligendi, neque delectus consectetur odio
temporibus veniam autem, nemo similique voluptatem hic, ullam
deleniti! Debitis rem, tenetur quam cumque.</p>
    </div>
-->

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
                        <img class="img-responsive img-rounded"
src="assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Jhon Mer e Der

                        </span>

                    </div>
                </div>

                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control
search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search"
aria-hidden="true"></i>
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
                                <span class="badge badge-pill
badge-danger">New</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Salvos</a></li>
                                    <li><a href="#">Salvos</a></li>
                                    <li><a href="#">Salvos</a></li>
                                    <li><a href="#">Salvos</a></li>
                                    <li><a href="#">Salvos</a></li>
                                    <li></li>
                                   <li class="verTudo"><a
href="salvos.html">VER TODAS SALVAS</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Notificação</span>
                                <span class="badge badge-pill
badge-primary">6</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="#">Notificação </a></li>
                                    <li><a href="#">Notificação </a></li>
                                    <li><a href="#">Notificação </a></li>
                                    <li><a href="#">Notificação </a></li>
                                    <li><a href="#">Notificação </a></li>
                                    <li><a href="#">Notificação </a></li>
                                    <li class="verTudo"><a
href="notificacao.html">VER TODAS NOTIFICAÇÕES</a></li>

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

                    <a href="#" class="" id="dropdownMenuNotification"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning
notification">3</span>
                    </a>
                    <div class="dropdown-menu notifications"
aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i> Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check
text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div
class="notification-detail">Lorem ipsum dolor sit amet consectetur
adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation
text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div
class="notification-detail">Lorem ipsum dolor sit amet consectetur
adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas
fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div
class="notification-detail">Lorem ipsum dolor sit amet consectetur
adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center"
href="#">View all notifications</a>
                    </div>
                </div>


                <div class="dropdown">
                    <a href="#" class="" id="dropdownMenuMessage"
data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu"
aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="#">Setting</a>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>

        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
               <div class="col-md-12">
               <div class="titulo"><h1>Alterar Dados</h1></div>
               <div style="background-color:#E8E8E8; padding-left:
50px; padding-top: 15px; width: 100%; left: 2%; position: relative;"
class="row">
<form class="needs-validation" novalidate>
  <div style="height: 10%; " class="form-row">
     <div class="col-md-10 mb-2">
      <label for="validationTooltipUsername">NOME COMPLETO</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4
4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0
0h24v24H0z" fill="none"/></svg></span>
        </div>
        <input type="text" class="form-control"
id="validationTooltipUsername" placeholder="Ex: Maria Oliveira"
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
    </div>
        <div style="position: relative; left: 100%; top:-74px;"
class="col-md-5 mb-2">
      <label for="validationTooltipUsername">Data de nascimento</label>
      <div class="input-group">

        <input type="date" class="form-control"
id="validationTooltipUsername" 
aria-describedby="validationTooltipUsernamePrepend" required>

      </div>
    </div>
             <div style="position: relative; left: 100%; top:-74px;"
class="col-md-5 mb-2">
      <label for="validationTooltipUsername">SEXO</label>
      <div class="input-group">

          <select style="" class="form-control">
          <option value="Escolher" disabled selected >Escolher</option>
          <option value="Feminino" >Feminino</option>
          <option value="Masculino" >Masculino</option>
          </select>

      </div>
    </div>
       
  </div>
  <div style="height: 10%;" class="form-row">
         <div class="col-md-10 mb-2">
      <label for="validationTooltipUsername">E-MAIL</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1
0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0
0h24v24H0z" fill="none"/></svg></span>
        </div>
        <input type="text" class="form-control"
id="validationTooltipUsername" placeholder="Ex: Maria Oliveira"
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
    </div>
      <div style="position: relative; left: 100%; top:-74px;" class="col-md-10 mb-2">
      <label for="validationTooltipUsername">CONFIRMAR E-MAIL</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1
0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0
0h24v24H0z" fill="none"/></svg></span>
        </div>
        <input type="text" class="form-control"
id="validationTooltipUsername" placeholder="Ex: Maria Oliveira"
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
    </div>
     
       
  </div>
    <div class="form-row" >
              <div class="col-md-10 mb-2">
      <label for="validationTooltipUsername">SENHA</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg></span>
        </div>
        <input type="text" class="form-control"
id="validationTooltipUsername" placeholder="Ex: Maria Oliveira"
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
    </div>
         <div style="position: relative; left: 100%; top:-74px;" class="col-md-10 mb-2">
      <label for="validationTooltipUsername">CONFIRMAR SENHA</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg></span>
        </div>
        <input type="text" class="form-control"
id="validationTooltipUsername" placeholder="Ex: Maria Oliveira"
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
    </div>     
        
    </div>
    <div style="position: relative; left: 158%;" class="form-row ">
<button type="button" class="btn btn-danger">Cancelar</button>
<button type="button" class="btn btn-success">Salvar</button>

    </div>
</form>
               </div>


                </div></div>
        </main>
        <!-- page-content" -->
    </div>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>
