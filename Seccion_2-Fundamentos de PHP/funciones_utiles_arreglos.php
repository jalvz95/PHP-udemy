<?php

#Funciones de arreglo
#Las funciones de arreglo nos permiten manipular arreglos

#extract($arreglo); #Extrae las claves de un arreglo y las convierte en variables
 $amigo=array(
    'telefono'=>1234567,
    'edad'=>20,
    'pais'=>'Mexico');

extract($amigo); 

# echo $telefono; #Imprime 1234567 (El valor de la variable telefono) */
//////////////////////////////////////////////////////////////////////////////

#array_pop($arreglo); #Extrae y Elimina el ultimo elemento de un arreglo
$semana=array(
    'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'
);

$ult_dia = array_pop($semana); 
// array_pop($semana); #Elimina el ultimo elemento del arreglo (domingo en este caso)
foreach ($semana as $dia) {
    echo $dia.'<br>';
} 
echo $ult_dia . '<br>'; #Imprime el ultimo elemento del arreglo (domingo en este caso)
//////////////////////////////////////////////////////////////////////////////

#join($separador, $arreglo); #Une los elementos de un arreglo en un string
#Ejemplo:
echo join('<li/>', $semana); #Imprime Lunes - Martes - Miercoles - Jueves - Viernes - Sabado
//////////////////////////////////////////////////////////////////////////////  

#count($arreglo); #Cuenta la cantidad de elementos de un arreglo
echo count($semana); #Imprime 6
//////////////////////////////////////////////////////////////////////////////

// sort($semana); #Ordena el arreglo de menor a mayor
// rsort($semana); #Ordena el arreglo de mayor a menor
// array_reverse($semana); #Invierte el orden del arreglo
// asort($semana); #Ordena el arreglo de menor a mayor manteniendo la relacion de indices
//////////////////////////////////////////////////////////////////////////////

/* https://www.php.net/manual/es/ref.array.php */ # Lista de funciones de arreglo


?>