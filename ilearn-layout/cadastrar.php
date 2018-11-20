<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title></title>

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
  
 

    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
</head>
<style>
    .logoLogin img{
        width: 260px;
        margin-top: 80px;
    }
    
    .formCadastro{
      border-radius: 10px;
        background: steelblue;
        padding: 60px 60px 0 60px ;
        margin-top: 80px;
        margin-bottom: 30px;
        
    }
    
    .btn-cadastro-se p{
        text-align: center;
        margin: 0 auto;
    }

</style>

<div class="container ">
    <div class="col-md-12 logoLogin text-center" >
        <img src="img/logo.png" alt="">        
    </div>
    
    <div class="col-md-12 ">
     <div class="row justify-content-center">
      <form action="telaDeCadastro.php" method="POST" enctype="multipart/form-data" class="formCadastro col-md-6 ">
      
      
<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Email</span>
  </div>
  <input type="text" class="form-control" name="emailCadastro" aria-label="login " aria-describedby="nome-login">
</div>
     </div>
     
  <div class="row justify-content-center">   
<div class="input-group mb-3 col-md-12 justify-content-center">
  <div class="input-group-prepend">
    <span class="input-group-text" id="senha-login">Senha</span>
  </div>
  <input type="password" name="senhaCadastro" class="form-control" aria-label="login " aria-describedby="senha-login">
</div>
     </div>

 <div class="row justify-content-center">   
<div class="input-group mb-3 col-md-12 justify-content-center">
  <div class="input-group-prepend">
    <span class="input-group-text" id="senha-login">Nickname</span>
  </div>
  <input type="text" name="nickCadastro" class="form-control" aria-label="login " aria-describedby="senha-login">
</div>
     </div> 



<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Nivel</span>
  </div>
  <select class="form-control" name="nivelCadastro" aria-label="login " aria-describedby="nome-login">
    <option>TECNICO</option>
     <option>MESTRADO</option>
      <option>DOUTORADO</option>
  </select>
</div>
     </div>


<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Instituição</span>
  </div>
  <input type="text" class="form-control" name="instituicaoCadastro" aria-label="login " aria-describedby="nome-login">
</div>
     </div>

<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Curso</span>
  </div>
  <input type="text" class="form-control" name="cursoCadastro" aria-label="login " aria-describedby="nome-login" >
</div>
     </div>
<!-- 

<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">imagem</span>
  </div>
  <input type="file" class="form-control" name="foto" aria-label="login " aria-describedby="nome-login" placeholder="digite aqui sua formação mais recente">
</div>
     </div> -->

<!-- 
     <div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Texto</span>
  </div>
  <input type="text" class="form-control" aria-label="login " aria-describedby="nome-login">
</div>
     </div>


     <div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Texto</span>
  </div>
  <input type="text" class="form-control" aria-label="login " aria-describedby="nome-login">

</div>
     </div>

 -->
     
     <div class="row justify-content-center">   
<div class=" mt-3 col-md-6 justify-content-center text-center">
 <button class="btn btn-primary" style="color: black; background-color: white;" >Cadastrar</button>
</div>
     </div> 
     <div class="row btn-cadastro-se py-4">
         <p ><a href="login.php" style="color: black;">LOGIN</a></p>
     </div>
      
   
                
</form> 
        </div> 
    </div>
    
    
    
</div>


<?php
include "inferior.php";
?>