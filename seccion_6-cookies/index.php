<?php
// cookies
// Para crear una cookie, se utiliza la funcion setcookie().
// setcookie(nombre, valor, expiracion, ruta, dominio);
// nombre: Es el nombre de la cookie.
// valor: Es el valor de la cookie.
// expiracion: Es la fecha de expiracion de la cookie. Se expresa en segundos desde la epoca Unix (1 de Enero de 1970).
// ruta: Es la ruta en la que estara disponible la cookie.
// dominio: Es el dominio en el que estara disponible la cookie.

setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>