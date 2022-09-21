<?php
#Primero se valida que el formulario se haya enviado
#Declaramos las variables que vamos a utilizar
#En este caso una variable para los errores y otra para saber el estado del mensaje de exito (True o False)
#hola
$enviado = false;
$errores='';


    if (isset($_POST['enviar'])){
        $nombre= $_POST['nombre'];
        $tellf= $_POST['tellf'];
        $email= $_POST['email'];
        $mensaje= $_POST['mensaje'];

        if(!empty($nombre)){
            $nombre= trim($nombre);
            $nombre= htmlspecialchars($nombre);
            $nombre= stripslashes($nombre);
        }else{
            $errores.= 'Por Favor Ingrese un Nombre <br/>';
        }

        if(!empty($tellf)){
            $tellf= trim($tellf);
            $tellf= htmlspecialchars($tellf);
            $tellf= stripslashes($tellf);
        }else{
            $errores.= 'Por Favor Ingrese un Numero <br/>';
        }

        if(!empty($email)){
            $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores .= 'Por favor ingresa un correo valido <br/>';
            }
        } else {
            $errores .= 'Por favor Agrega un Correo <br/>';
        }

        if(!empty($mensaje)){
            $mensaje= trim($mensaje);
            $mensaje= htmlspecialchars($mensaje);
            $mensaje= stripslashes($mensaje);
        }else{
            $errores.= 'Por Favor Ingrese un Mensaje <br/>';
        }
        if(!$errores){ #Si no hay errores se envia el correo
            $enviar_a = 'tunombre@empresa.com';
            $asunto= 'Correo enviado desde miPagina.com';
            $mensaje_preparado = "De: $nombre \n";
            $mensaje_preparado .= "Correo: $email \n";
            $mensaje_preparado .= "Teléfono: $tellf \n";
            $mensaje_preparado .= "Mensaje: " . $mensaje;
            $mensaje_preparado .= 'Enviado el ' . date('d/m/Y', time());
            
            #mail($enviar_a, $asunto, $mensaje_preparado); #Envia el correo #Descomentar para enviar el correo
            $enviado = 'true'; #Si el correo se envia correctamente cambia el valor de la variable a true
        }
    }

echo $errores;



require 'index.view.php';
?>