<?php

// echo pathinfo('documento2.txt', PATHINFO_BASENAME) // Devuelve información sobre una ruta de archivo y directorio 

// echo pathinfo('documento2.txt', PATHINFO_EXTENSION) // Devuelve información sobre la extension del archivo

// echo pathinfo('usuario/carpeta/documento2.txt', PATHINFO_DIRNAME) // Devuelve información sobre el directorio del archivo

// echo pathinfo('usuario/carpeta/documento2.txt', PATHINFO_FILENAME) // Devuelve información sobre el nombre del archivo

// $resultado= glob('*.php'); // Devuelve un array con los archivos que coincidan con el patron

// $resultado2= glob('*.{php,html,txt}', GLOB_BRACE); // Devuelve un array con los archivos que coincidan con el patron

$resultado3= glob('../seccion_7-conectando-base-de-datos/*.{php,html,txt}', GLOB_BRACE); // Devuelve un array con los archivos que coincidan con el patron
print_r($resultado3);
?>