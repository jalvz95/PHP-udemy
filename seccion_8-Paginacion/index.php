<?php

try {
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$artPorPagina=5;

$inicio = ($pagina > 1) ? ($pagina * $artPorPagina - $artPorPagina) : 0; // Con esta variable calculamos cuantos articulos vamos a saltar para mostrar los que queremos en cada pagina
$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $artPorPagina"); // SQL_CALC_FOUND_ROWS es una funcion de MySQL que nos permite saber cuantos articulos hay en total

$articulos->execute();
$articulos = $articulos->fetchAll(); // fetchAll() nos devuelve un array con todos los articulos
if(!$articulos){
    header('Location: index.php');
}

$ttlArticulos= $conexion->query('SELECT FOUND_ROWS() as total'); // Con esta funcion de MySQL obtenemos el total de articulos que hay en la base de datos
$ttlArticulos = $ttlArticulos->fetch()['total']; // fetch() nos devuelve un array con el total de articulos

$nmeroPaginas= ceil($ttlArticulos / $artPorPagina); // Con esta variable calculamos cuantas paginas vamos a tener

require 'index.view.php';

?>