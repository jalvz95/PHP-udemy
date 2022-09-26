<?php

function contar_usuarios(){  // Creamos la funcion
    $archivo= 'contador.txt';

    if(file_exists($archivo)){ // Comprobamos si existe el archivo
        $contador= file_get_contents($archivo); // Obtenemos el contenido del archivo
        $contador++;    // Incrementamos el contador
        file_put_contents($archivo, $contador); // Guardamos el contador en el archivo
        return $contador;
    }else{
        file_put_contents($archivo, 1);
        return 1;
    }
}

require 'index.view.php';
?>