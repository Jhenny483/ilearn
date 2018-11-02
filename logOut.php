<?php
session_start();
session_destroy();
$_SESSION['cod'];
header('Location:login.html');
?>