<?php

#Atajo if
#Es una forma de escribir un if en una sola linea

#Ejemplo 1

$edad = 18;

// $edad=(isset($_GET['edad']))?$_GET['edad']:'No se ha ingresado una edad'; 
$edad =(isset($edad)) ? $edad : 'No se ha ingresado una edad';
// En la linea de arriba se esta preguntando si la variable edad esta definida, si esta definida se asigna a la variable edad
// si no esta definida se asigna el mensaje 'No se ha ingresado una edad'
echo "La edad es: $edad";

/* $var = (condicion) ? $var : 'mensaje'; */ 
/* Basicamente es lo mismo que escribir 
    if(condicion) {
        $var = $var; 
    }else {
        $var = 'mensaje';
    }   
*/

?>