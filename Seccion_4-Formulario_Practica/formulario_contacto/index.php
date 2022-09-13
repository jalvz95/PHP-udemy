<?php
#Primero comprobamos si nuestro formulario a sido enviado
#Creamos una condiciones para comprobar si el formulario a sido enviado
#Creamos una variable para almacenar los errores
$errores= '';
$enviado = '';

if (isset($_POST['submit'])){
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $mensaje= $_POST['mensaje'];

    if(!empty($nombre)){
        $nombre = trim($nombre); #Elimina espacios en blanco al inicio y al final
        $nombre= htmlspecialchars($nombre); #Elimina caracteres especiales
        $nombre = stripslashes($nombre); #Elimina las barras invertidas
    }else{
        $errores .= 'Por favor agrega un Nombre <br/>';
        }
    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); #Elimina caracteres especiales
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){# Valida que el correo sea valido
            $errores .= 'Por favor ingresa un correo valido <br/>';
        }
    } else {
    $errores .= 'Por favor agrega un Correo <br/>';
    }
}
require 'index.view.php';

?>