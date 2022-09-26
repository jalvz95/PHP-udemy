<!-- En este archivo comprobamos que tenga una session y si no lo enviamos a que inicie sesion o al registro para poder mostrar el contenido-->
<?php session_start(); // Iniciamos la session

if(isset($_SESSION['usuario'])) { // Comprobamos si existe la session
    require 'vista/contenido.view.php'; // Si existe la session mostramos el contenido
} else {
    header('Location: login.php'); // Si no existe la session lo enviamos a que inicie sesion
}

?>