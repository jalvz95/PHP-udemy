<?php

$meses= array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
;

#En este caso queremos ordenar el arreglo de manera alfabetica
//sort($meses); #sort(array) ordena el arreglo de manera alfabetica
#Tambien podemos ordenar el arreglo de manera alfabetica inversa
rsort($meses); #rsort(array) ordena el arreglo de manera alfabetica inversa

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
    <h1>Meses del a*o</h1>
    <ul>
    <?php
    #Esta es la forma mas facil de recorrer un arreglo en PHP
    
    foreach ($meses as $mes) {
        echo "<li>$mes</li>"; // echo "<li>" . $mes . "</li>"; 
    }
        # Usamos foreach para recorrer el arreglo
        # $meses es el arreglo que queremos recorrer
        # $mes es la variable que va a tomar cada uno de los valores del arreglo
        # $meses as $mes es la sintaxis de foreach

    ?>