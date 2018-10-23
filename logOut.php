<?php 
require_once 'index.php';
session_destroy();
$_SESSION;
header('Location:login.html');
//TELA LOGOUT, PRA SAIR DO SITE AO CLICAR NO BOTAO 'SAIR'
?>