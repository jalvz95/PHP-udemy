<?php
// Para iniciar sesion, se debe llamar a la funcion session_start() antes de cualquier salida de HTML.
session_start();

$_SESSION['usuario'] = 'Juan';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Pagina de Inicio</h1>
    <p></p>
    
    <a href="pagina2.php"> Ir a la Pagina</a>
</body>
</html>