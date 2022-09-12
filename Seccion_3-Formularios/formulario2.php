<?php

$errores= '';

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    
    if(!empty($nombre)){
        $nombre = trim($nombre); #Elimina espacios en blanco al inicio y al final
        $nombre= htmlspecialchars($nombre); #Elimina caracteres especiales
        $nombre = stripslashes($nombre); #Elimina las barras invertidas
        
        echo "Tu nombre es: $nombre <br/>";
    }else{
        $errores .= 'Por favor agrega un nombre <br/>';
    }

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL); #Elimina caracteres especiales
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){# Valida que el correo sea valido
            $errores .= 'Por favor ingresa un correo valido <br/>';
        }else{
            echo "Tu correo es: $correo <br/>";
        }}
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{
            color: red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">

        <?php if(!empty($errores)): ?> 
            <div class="error"> <?php echo $errores; ?> </div>
        <?php endif; ?>



        <input type="submit" name="submit">
    </form>

</body>
</html>