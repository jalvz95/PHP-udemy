<?php session_start(); // Iniciamos la session

session_destroy(); // Destruimos la session

$_SESSION = array(); // Limpiamos la session
header('Location: login.php'); // Lo enviamos al login

?>