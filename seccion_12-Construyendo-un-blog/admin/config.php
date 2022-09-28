<?php

define('RUTA', 'http://localhost/php/PHP-udemy/seccion_12-Construyendo-un-blog/'); // Definimos una ruta global para nuestro proyecto y la llamamos RUTA
$bd_config = array(                                                                   // Definimos un array con los datos de la base de datos
    'basedatos' => 'blog_practica',                 
    'usuario' => 'root',
    'pass' => ''
);

$blog_config = array(                                                               // Definimos un array con los datos de la configuración del blog y lo llamamos blog_config
    'post_por_pagina' => '3',
    'carpeta_imagenes' => 'img/'
);

$blog_admin = array(                                                                // Definimos un array con los datos del administrador del blog y lo llamamos blog_admin
    'usuario' => 'admin',
    'password' => '123nust'
);
?>