
<?php
include "superior.php";
  require_once 'bancoDeDados.php';
  $usr = $_SESSION['cod'];

    if($usr == ""){
      header('Location:login.html');
    }
    $banco = new BancoDeDados();


          $busca = "SELECT * FROM salvos WHERE idPerfil = '{$_SESSION['cod'][0]}' ORDER BY idSalvo DESC";
      
      $banco->abrirConexao();
      $banco->executarSQL($busca);
      $consulta = $banco->lerResultados();
      
                  if ($consulta == NULL) {
            echo "<h1 style='text-align:center;position:relative:top:60px;'>" . "Você não possui textos salvos" . "</h1>";
        } else {
            echo "<h1 style='text-align:center;position:relative:top:60px;'>" . "Textos salvos" . "</h1>";
          }
    ?>

 <main class="page-content">
                <div class="container-fluid">

        <style type="text/css">
            .linhaNotificacao a{
                color: #000;
              }
            

        </style>
                   <div class="col-md-12">
                   <div class="titulo"></div>
      <?php

        foreach ($consulta as $save) { ?>
                
                   <div class="row my-4">
                       <div  class="caixaNotificacao">
                           <div class="linhaNotificacao">
                       
                               <div class="container-fluid" style="background-color:snow; border: solid 1px; border-radius: 5px; height: auto;">
                                   <div class="user-pic">
<!--                                                                        <img src="assets/img/avatar.png" class="rounded-circle" alt="">
 -->
                            <img class="rounded-circle" style="float: left; width: 60px; padding: 2px; margin-top: 7px; border-radius: 12px; margin-right: 15px; overflow: hidden;" src="assets/img/avatar.png" alt="User picture">
                    <div class="user-info">
                           <a href="perfilOutroUsuario.php?idUsu=<?=$save['idUsuario'];?>&idPub=<?=$save['idPublicacao'];?>"" class="user-name" style="color: #000000; position: relative; right: 42%; top: 10px; ">
                            <?= $save['usuarioSalvo'];?>
                           </a>
                        </div> 
                            <a href="telaRemoverSalvos.php?idsalvo=<?=$save['idSalvo'];?>" src=""><button style="float: left;position: relative; left: 80%;top: 15px;" type="button" class="btn btn-outline-danger">Excluir</button></a>
                             

                             <a href="post.php?idPub=<?=$save['idPublicacao'];?>" src="" style="float: left;position: relative; left: 60%;top: 25px;" class="user-name" style="color: #ffffff;"> VER MAIS 
                           </a>
                                 <div>  <p style="width: 60%;right: 10%;position: relative;word-wrap: break-word; text-align: justify; top: -10px;"><?php echo substr($save['textoSalvo'], 0,30);?>...</p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
         <?php }


 ?>            


<!--                 </div>
              </div>
            </main>



            <!-- sidebar-wrapper  -->
           <!--  <main class="page-content">
                <div class="container-fluid">
                   <div class="col-md-12">
                   <div class="titulo"><h1>Salvos</h1></div>
                   <div class="row my-4">
                       <div  class="caixaNotificacao">
                           <div class="linhaNotificacao">

                               <div class="container-fluid" style="background-color:snow; border: solid 1px; border-radius: 5px; height: auto;">
                                   <div class="user-pic">
                                       
                            <img class="img-responsive img-rounded" style="float: left; width: 60px; padding: 2px; margin-top: 7px; border-radius: 12px; margin-right: 15px; overflow: hidden;" src="assets/img/user.jpg" alt="User picture">
                    <div class="user-info">
                           <a href="post.php" class="user-name" style="color: #000000; position: relative; right: 42%; top: 10px; ">Jhon Smith
                           </a>
                        </div> 
                            <button style="float: left;position: relative; left: 80%;top: 15px;" type="button" class="btn btn-outline-danger">Excluir</button>
                             <a href="post.php" style="float: left;position: relative; left: 60%;top: 25px;" class="user-name" style="color: #ffffff;"> VER MAIS 
                           </a>
                         
                             
                        </div>
                             <div>  <p style="width: 60%;right: 10%;position: relative;word-wrap: break-word; text-align: justify; top: -10px;">egegfawawfawfhjfbwajkwfbjkwbwjkbwjkbfjkbfwjkbfwjkwfbjkwfbjkwbawejgwbjgbewjkgbnejgnkljenkegnkenkelgnkeagnkeagnkjengiokenkoanginiengiengeiongeaujigbeauyhgbeayihgbeaybgueabugej</p></div>     
                           </div>
                       </div>
                   </div>                  
                       </div>



    <div class="row my-4">
                       <div  class="caixaNotificacao">
                           <div class="linhaNotificacao">

                               <div class="container-fluid" style="background-color:snow; border: solid 1px; border-radius: 5px; height: auto;">
                                   <div class="user-pic">
                                       
                            <img class="img-responsive img-rounded" style="float: left; width: 60px; padding: 2px; margin-top: 7px; border-radius: 12px; margin-right: 15px; overflow: hidden;" src="assets/img/user.jpg" alt="User picture">
                    <div class="user-info">
                           <a href="post.php" class="user-name" style="color: #000000; position: relative; right: 42%; top: 10px; ">Jhon Smith
                           </a>
                        </div> 
                            <button style="float: left;position: relative; left: 80%;top: 15px;" type="button" class="btn btn-outline-danger">Excluir</button>
                             <a href="post.php" style="float: left;position: relative; left: 60%;top: 25px;" class="user-name" style="color: #ffffff;"> VER MAIS 
                           </a>
                         
                             
                        </div>
                             <div>  <p style="width: 60%;right: 10%;position: relative;word-wrap: break-word; text-align: justify; top: -10px;">egegfawawfawfhjfbwajkwfbjkwbwjkbwjkbfjkbfwjkbfwjkwfbjkwfbjkwbawejgwbjgbewjkgbnejgnkljenkegnkenkelgnkeagnkeagnkjengiokenkoanginiengiengeiongeaujigbeauyhgbeayihgbeaybgueabugej</p></div>     
                           </div>
                       </div>
                   </div>                  
                       </div>


                           <div class="row my-4">
                       <div  class="caixaNotificacao">
                           <div class="linhaNotificacao">

                               <div class="container-fluid" style="background-color:snow; border: solid 1px; border-radius: 5px; height: auto;">
                                   <div class="user-pic">
                                       
                            <img class="img-responsive img-rounded" style="float: left; width: 60px; padding: 2px; margin-top: 7px; border-radius: 12px; margin-right: 15px; overflow: hidden;" src="assets/img/user.jpg" alt="User picture">
                    <div class="user-info">
                           <a href="post.php" class="user-name" style="color: #000000; position: relative; right: 42%; top: 10px; ">Jhon Smith
                           </a>
                        </div> 
                            <button style="float: left;position: relative; left: 80%;top: 15px;" type="button" class="btn btn-outline-danger">Excluir</button>
                             <a href="pefil.php" style="float: left;position: relative; left: 60%;top: 25px;" class="user-name" style="color: #ffffff;"> VER MAIS 
                           </a>
                         
                             
                        </div>
                             <div>  <p style="width: 60%;right: 10%;position: relative;word-wrap: break-word; text-align: justify; top: -10px;">egegfawawfawfhjfbwajkwfbjkwbwjkbwjkbfjkbfwjkbfwjkwfbjkwfbjkwbawejgwbjgbewjkgbnejgnkljenkegnkenkelgnkeagnkeagnkjengiokenkoanginiengiengeiongeaujigbeauyhgbeayihgbeaybgueabugej</p></div>     
                           </div>
                       </div>
                   </div>                  
                       </div>


                    </div></div>
            </main> -->
           


<?php
include "inferior.php";
?>
