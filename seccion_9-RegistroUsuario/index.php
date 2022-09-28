<?php session_start(); // Iniciamos la session

if(isset($_SESSION['usuario'])) { // Comprobamos si existe la session
    header('Location: contenido.php'); // Si existe la session lo enviamos al contenido
} else {
    header('Location: registro.php'); // Si no existe la session lo enviamos a que inicie sesion
}


?>