<?php

$meses= array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
'julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
;

$jhoset = array(
    'telefono' => 123456789,
    'edad' => 27,
    'pais' => 'Venezuela'
);

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
    
    foreach ($meses as $mes) { //El foreach recorre el arreglo y lo guarda en la variable $mes temporalmente
        echo "<li>$mes</li>"; // echo "<li>" . $mes . "</li>"; 
    }   
        # El ciclo foreach se va a ejecutar hasta que se recorra todo el arreglo
        # Usamos foreach para recorrer el arreglo
        # $meses es el arreglo que queremos recorrer
        # $mes es la variable que va a tomar cada uno de los valores del arreglo
        # $meses as $mes es la sintaxis de foreach

        #Recorriendo un arreglo asociativo
        #Ejemplo:   
        
    foreach ($jhoset as $dato => $valor) {
        echo "<li>El $dato de Jhoset es $valor</li>";
    }
    ?>
    
    </ul>
</body>
</html>