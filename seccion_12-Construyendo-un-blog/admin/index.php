<?php session_start();

// Archivo index del ADMIN del blog

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

comprobarSession();

if (!$conexion){
    header('Location: ../error.php');
}

$posts= obternerPost($blog_config['post_por_pagina'], $conexion);


require '../vista/admin.index.view.php';
?>