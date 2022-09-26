<?php

require 'funciones.php';
$fotos_por_pagina=8;

$pagina_actual= (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
$inicio= ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;
$conexion = conexion('curso_galeria','root','');

if(!$conexion){
    die();
}

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina"); // sql_calc_found_rows es una funcion de mysql que nos permite saber cuantas filas tiene una consulta sin tener que hacer un count //

$statement->execute();
$fotos = $statement->fetchAll(); // fechalll nos devuelve un array con todos los resultados de la consulta //

if(!$fotos){
    header('Location: index.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas"); // nos devuelve el total de filas que tiene la consulta //
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);

require 'vistas/index.view.php';
?>