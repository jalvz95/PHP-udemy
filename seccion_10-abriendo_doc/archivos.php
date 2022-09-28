<?php

// if(file_exists('documento.txt')){
    echo 'El archivo existe';
// }else{
    echo 'El archivo no existe';
// }
// 
// echo file_get_contents('documento.txt'); // Muestra el contenido del archivo

// file_put_contents('documento.txt', 'Hola Mundo '); // Crea un archivo y le agrega el contenido que le pasemos
// file_put_contents('documento.txt', "Hola Mundozx \n", FILE_APPEND); // Crea un archivo y le agrega el contenido que le pasemos al final del archivo
// 
// file_put_contents('documento2.txt', ''); // Crea un archivo vacio
// for ($i=1; $i <= 100; $i++) { 
//     file_put_contents('documento2.txt', "$i \n ", FILE_APPEND); // Crea un archivo y le agrega el contenido que le pasemos al final del archivo");
// }

$archivo= file('documento2.txt'); // Muestra el contenido del archivo en un array
echo "<pre>";
print_r($archivo);

?>