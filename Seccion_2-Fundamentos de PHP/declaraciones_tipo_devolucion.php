<?php

#Declaraciones de tipo devolucion
#Nos permiten especificar el tipo de dato que va a retornar una funcion
#Esto nos permite tener un control mas estricto de los datos que se van a retornar

function obternerEdad() : int {
    $edad= 23;
    return $edad;
}

echo obternerEdad();
?>