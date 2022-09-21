<?php
#Primero comprobamos si nuestro formulario a sido enviado
#Creamos una condiciones para comprobar si el formulario a sido enviado
#Creamos una variable para almacenar los errores
$errores= ''; #Esta variable la usaremos para almacenar los errores
$enviado = ''; #Esta variable la usaremos para almacenar el mensaje de enviado

if (isset($_POST['submit'])){ #Si el formulario a sido enviado se ejecuta el codigo
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $mensaje= $_POST['mensaje'];

    if(!empty($nombre)){ #Si el nombre no esta vacio
        $nombre = trim($nombre); #Elimina espacios en blanco al inicio y al final
        $nombre= htmlspecialchars($nombre); #Elimina caracteres especiales
        $nombre = stripslashes($nombre); #Elimina las barras invertidas
    }else{
        $errores .= 'Por favor agrega un Nombre <br/>';
        }
    if(!empty($correo)){ #Validamos que el campo no este vacio
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); #Elimina caracteres especiales
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){# Valida que el correo sea valido
            $errores .= 'Por favor ingresa un correo valido <br/>';
        }
    } else {
    $errores .= 'Por favor agrega un Correo <br/>';
    }
    if(!empty($mensaje)){ #Validamos que el mensaje no este vacio
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);
        $mensaje = trim($mensaje);
    }else{
       $errores .= 'Por favor agrega un Mensaje <br/>'; 
    }
    if(!$errores){ #Si no hay errores se envia el correo
        $enviar_a = 'tunombre@empresa.com';
        $asunto= 'Correo enviado desde miPagina.com';
        $mensaje_preparado = "De: $nombre \n";
        $mensaje_preparado .= "Correo: $correo \n";
        $mensaje_preparado .= "Mensaje: " . $mensaje;

        #mail($enviar_a, $asunto, $mensaje_preparado); #Envia el correo #Descomentar para enviar el correo
        $enviado = 'true'; #Si el correo se envia correctamente cambia el valor de la variable a true
    }
}
require 'index.view.php'; #Llamamos a la vista del formulario

?>