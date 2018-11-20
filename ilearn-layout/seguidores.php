<?php
include "superior.php";
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'][0];
$banco = new BancoDeDados();

      $select = "SELECT idSeguidor FROM seguidor WHERE idSeguido = '{$usr}' ORDER BY idSeg DESC";

$banco->abrirConexao();
$banco->executarSQL($select);
$res = $banco->lerResultados();


?>



<style>
    .card-img img{
        width: 30%;
    }
.avatarAmigo img{
width: 45%;
margin: 0 auto;
border-radius: 50%;
position: relative;
top:-40px;
}


</style>
   <main class="page-content" style="background-color: ;">
            <div class="container-fluid margin-superior-menu" style="background-color: ;">
    <div class="row " style="background-color: ;">
<?php 

    $seguidores = "SELECT nicknameSeguidor,idSeguido, idSeguidor FROM seguidor WHERE idSeguido = '$usr'";
    $banco->executarSQL($seguidores);
    $resBusca = $banco->lerResultados();

  foreach ($resBusca as $amigo) {?>
 

       <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title"><?=$amigo['nicknameSeguidor'];?></h5>
    
    <a href="perfilOutroUsuario.php?idUsu=<?=$amigo['idSeguidor'];?>" src="" class="btn btn-primary">Ver amigo</a>
  </div>
</div>
       


 <?php } ?>
      
<!--      <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title">Nome amigo</h5>
    
    <a href="#" class="btn btn-primary">Ver amigo</a>
  </div>
</div>


  <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title">Nome amigo</h5>
    
    <a href="#" class="btn btn-primary">Ver amigo</a>
  </div>
</div>
   
       
       
      </div>
       <div class="row " style="background-color: ;"> 
       
       
         <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title">Nome amigo</h5>
    
    <a href="#" class="btn btn-primary">Ver amigo</a>
  </div>
</div>

  <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title">Nome amigo</h5>
    
    <a href="#" class="btn btn-primary">Ver amigo</a>
  </div>
</div>


  <div class="card col-md-3 mx-3 my-3 text-center">
  <img class="card-img-top" src="assets/img/banner1-1.jpg" alt="Banner usuario">
  <div class="avatarAmigo">
  <img src="assets/img/avatar.png">
  </div> 
  <div class="card-body">
    <h5 class="card-title">Nome amigo</h5>
    
    <a href="#" class="btn btn-primary">Ver amigo</a>
  </div>
</div>
 -->       
       
       
       
       
       
       
        
    </div>
    </div>
       </main>
  
<!-- array(4) { [0]=> array(4) { ["idSeguidor"]=> string(3) "129" [0]=> string(3) "129" ["nicknameUsuario"]=> string(9) "fulaninho" [1]=> string(9) "fulaninho" } [1]=> array(4) { ["idSeguidor"]=> string(3) "129" [0]=> string(3) "129" ["nicknameUsuario"]=> string(2) "ab" [1]=> string(2) "ab" } [2]=> array(4) { ["idSeguidor"]=> string(3) "127" [0]=> string(3) "127" ["nicknameUsuario"]=> string(9) "fulaninho" [1]=> string(9) "fulaninho" } [3]=> array(4) { ["idSeguidor"]=> string(3) "127" [0]=> string(3) "127" ["nicknameUsuario"]=> string(2) "ab" [1]=> string(2) "ab" } }
 -->

<!-- Array ( [0] => Array ( [idSeguidor] => 129 [0] => 129 ) [1] => Array ( [idSeguidor] => 127 [0] => 127 ) ) -->
<?php
include "inferior.php";
?>