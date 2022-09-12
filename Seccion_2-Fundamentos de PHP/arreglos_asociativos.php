<?php

#Arreglos asociativos
#Los arreglos asociativos son arreglos que tienen un indice definido por nosotros

$jhoset = array(
    'nombre' => 'Jhoset',
    'apellido' => 'Alvarez',
    'edad' => 20,
    'pais' => 'Mexico',
    'lenguajes' => array('PHP', 'JavaScript'),
    'es_soltero' => true,
    'telefono'=> 1132528,
);
$jhoset['telefono']= 1149696;# se puede cambiar el valor de la variable

echo 'El telefono de Jhoset es: ' . $jhoset['telefono']; # se imprime el valor de la variable 

?>