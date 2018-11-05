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
    
    .formLogin{
        background: rgba(239, 81, 124, 0.23);
        padding: 60px 60px 0 60px ;
        margin-top: 80px;
        
    }
    
    .btn-cadastro p{
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
      <form action="" class="formLogin col-md-6 ">
      
      
<div class="row justify-content-center">
<div class="input-group mb-3 col-md-12 ">
  <div class="input-group-prepend">
    <span class="input-group-text" id="nome-login">Nome</span>
  </div>
  <input type="text" class="form-control" aria-label="login " aria-describedby="nome-login">
</div>
     </div>
     
  <div class="row justify-content-center">   
<div class="input-group mb-3 col-md-12 justify-content-center">
  <div class="input-group-prepend">
    <span class="input-group-text" id="senha-login">Senha</span>
  </div>
  <input type="text" class="form-control" aria-label="login " aria-describedby="senha-login">
</div>
     </div> 
     
     <div class="row justify-content-center">   
<div class=" mt-3 col-md-6 justify-content-center text-center">
 <button class="btn btn-primary">Entrar</button>
</div>
     </div> 
     <div class="row btn-cadastro py-4">
         <p ><a href="cadastrar.php" >CADASTRE-SE</a></p>
     </div>
      
   
                
        </form> 
        </div> 
    </div>
    
    
    
</div>


<?php
include "inferior.php";
?>