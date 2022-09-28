<?php

require 'admin/config.php';
require 'functions.php';


$conexion= conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

$posts= obternerPost($blog_config['post_por_pagina'], $conexion);

if (!$posts) {
    header('Location: error.php');
}

require 'vista/index.view.php';
?>