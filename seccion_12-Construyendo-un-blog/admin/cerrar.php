<?php session_start();

session_destroy();
$_SESSION = array(); // Elimina todas las variables de la session

header('Location: ../');
die();
?>