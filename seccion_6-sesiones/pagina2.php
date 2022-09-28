<?php
// Para iniciar sesion, se debe llamar a la funcion session_start() antes de cualquier salida de HTML.
session_start();

//Si la variable $_SESSION existe, entonces variable $usuario tendra el valor de $_SESSION['usuario'].
if ($_SESSION['usuario']) {
    $usuario = $_SESSION['usuario'];
    echo "Bienvenido $usuario";
} else {
    echo "No hay sesion iniciada";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <a href="cerrar.php"><h2>Cerrar Session</h2></a>
</body>
</html>