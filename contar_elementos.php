<?php

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre')
;

// echo count ($meses); # 12 elementos
#Podemos usar la función count() para saber cuantos elementos tiene el arreglo
$ultimo_mes= count($meses) - 1; # 11
$meses[$ultimo_mes]; # Diciembre 

?>