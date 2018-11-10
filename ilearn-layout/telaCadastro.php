<?php 
?>
<!DOCTYPE html>
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



        <!-- sidebar-wrapper  -->
        <main class="page-content">
        <div style="position: relative;top: 80px;">
            <div class="container-fluid">
               <div class="col-md-12">
                <div style="background-color:#E8E8E8; padding-left: 50px; padding-top: 15px; width: 75%; left: 10%; top: 100%; position: relative; " class="row">


<form action="telaDeCadastro.php" method="POST">
  
 <div style="height: 15%; " class="form-row">
  
     <div class="col-md-10 mb-2">
  
      <label for="validationTooltipUsername">NOME COMPLETO</label>
  
      <div class="input-group">
  
        <div class="input-group-prepend">
  
          <span class="input-group-text" id="validationTooltipUsernamePrepend">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
    <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/>
      </svg>
    </span>
        
        </div>

        
                    <input type="text" class="form-control" name="nomeUsuarioC"  placeholder="Ex: Maria Oliveira"  required>
      
      </div>
      </div>
 </div>

 <div style="position: relative; left: 100%; top:-74px;"
class="col-md-5 mb-2">
      <label for="validationTooltipUsername">Data de nascimento</label>
      <div class="input-group">

                    <input type="date" name="dataNascC" class="form-control" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>

      </div>
    </div>

        <div style="position: relative; left: 100%; top:-74px;"
class="col-md-5 mb-2">
      <label for="validationTooltipUsername">SEXO</label>
      <div class="input-group">

          <select style=""  class="form-control" name="sUsuarioC">
          <option value="Escolher" disabled selected >Escolher</option>
          <option value="Feminino" name="sFeminino" >Feminino</option>
          <option value="Masculino" name="sMasculino" >Masculino</option>
          </select>

      </div>
    </div>

<div style="height: 15%;" class="form-row">
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
                         <input type="text" name="emailUsuarioC" value="" class="form-control"
id="validationTooltipUsername" placeholder=""
aria-describedby="validationTooltipUsernamePrepend" required>
      </div>
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

                          <input type="text" name="confirmarEmailC" class="form-control"
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

                          <input type="PASSWORD" name="senhaUsuarioC" value="" class="form-control"
id="validationTooltipUsername" placeholder=""
aria-describedby="validationTooltipUsernamePrepend" required>
     
      </div>
    </div>
  </div>
     
  <div style="position: relative; left: 100%; top:-74px;" class="col-md-10 mb-2">
      <label for="validationTooltipUsername">CONFIRMAR SENHA</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"
id="validationTooltipUsernamePrepend"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg></span>
        </div>
     
                       <input type="password" name="confirmarSenhaC" class="form-control"
id="validationTooltipUsername" placeholder="senha"
aria-describedby="validationTooltipUsernamePrepend" required>


      </div>
    </div>     

<a href="login.html" src=""><button class="btn btn-danger">Cancelar</button></a>
<a href="telaDeCadastro.php" src="">
<button class="btn btn-success">Salvar</button></a>


</form>
    </div>
</div></div></div></main>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>
