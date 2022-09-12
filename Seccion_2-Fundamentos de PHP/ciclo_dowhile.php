<?php

#Con el ciclo dowhile se ejecuta el código al menos una vez
#Ejemplo:
/*
$var = 0;
do{
    //Instrucciones
} while(Condicion);*/

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
;

$contador = 0;
do {
    echo $meses[$contador] . '<br>';
    $contador++;
} while ($contador < count($meses));



?>