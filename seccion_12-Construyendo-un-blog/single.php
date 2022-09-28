<?php

require 'admin/config.php';


require 'functions.php';

$conexion= conexion($bd_config);
$id_articulo = id_articulos($_GET['id']);


if (!$conexion) {
    header('Location: error.php');
}
if (empty($id_articulo)) {
    header('Location: index.php');
}

$singlePost= obtenerPostSingle($conexion, $id_articulo);
if(!$singlePost){
    header('Location: index.php');
}

$singlePost = $singlePost[0];

require 'vista/single.view.php';
?>