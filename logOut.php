<?php
session_start();
session_destroy();
$_SESSION['cod'];
header('Location:login.html');
?>



<?php
session_start();
require_once 'bancoDeDados.php';
$usr = $_SESSION['cod'];

if($usr == ""){
    session_destroy();
    header('Location:login.html');
}

?>
